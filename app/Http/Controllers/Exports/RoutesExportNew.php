<?php

namespace App\Http\Controllers\Exports;

use App\Route;
use App\WeekStart;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Maatwebsite\Excel\Events\AfterSheet;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
// use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithEvents;

use App\FruitBox;
use App\MilkBox;
use App\CompanyRoute;
use App\AssignedRoute;
use App\SnackBox;
use App\DrinkBox;
use App\OtherBox;


class RoutesExportNew implements WithMultipleSheets
// , WithEvents
{
    // use Exportable;

    protected $week_starting;
    protected $routescollection;

    protected $week_start;
    protected $delivery_days;

        public function __construct($week_starting)
        {
            $this->week_starting = $week_starting;

            $week_start = WeekStart::all()->toArray();
            $this->week_start = $week_start[0]['current'];
            $this->delivery_days = $week_start[0]['delivery_days'];
        }

    /**
     * @return array
     */
    public function sheets(): array
    {
        // This grabs all the current delivery routes for monday and tuesday, ordering the list by their tab order position.
        $OrderedRoutesMonTue = AssignedRoute::whereIn('delivery_day', ['Monday', 'Tuesday'])->orderBy('tab_order', 'desc')->get();
        // Now we only need their names, so let's just put them into a lovely array...
        foreach ($OrderedRoutesMonTue as $route) {
            // ... called $correctOrderMonTue
            $correctOrderMonTue[] = $route->name;
        }
        
        // This grabs all the current delivery routes for wednesday, thursday and friday, ordering the list by their tab order position.
        $OrderedRoutesWedThurFri = AssignedRoute::whereIn('delivery_day', ['Wednesday', 'Thursday', 'Friday'])->orderBy('tab_order', 'desc')->get();
        // Now we only need their names, so lets just put them into a lovely array...
        foreach ($OrderedRoutesWedThurFri as $route) {
            // ... called $correctOrderMonTue
            $correctOrderWedThurFri[] = $route->name;
        }
        
        $sheets = [];
        
        // Great, now let's check the delivery days we want to process this time and grab the array of those routes.
        // At the moment there are only two options but should we change to daily printouts, a switch statement would probably make more sense.
        
        if ($this->delivery_days == 'mon-tue') {

            foreach ($correctOrderMonTue as $routesolo) {
                $sheets[] = new RoutesCollectionNew($routesolo, $this->week_starting);
            }
            return $sheets;

        } else {

            foreach ($correctOrderWedThurFri as $routesolo) {
                $sheets[] = new RoutesCollectionNew($routesolo, $this->week_starting);
            }
            return $sheets;
        }



        // dd($routescollection);

        // $reorderedRoutesCollection = array_replace($correctOrder, $routescollection);
        // dd($reorderedRoutesCollection);


        // foreach ($routescollection as $routesolo) {
        //
        //     $sheets[] = new RoutesCollection($routesolo->assigned_to, $this->week_starting);
        // }

        // foreach ($correctOrderMonTue as $routesolo) {
        //
        //     $sheets[] = new RoutesCollection($routesolo, $this->week_starting);
        // }
        //
        // return $sheets;
    }

    // public function collection()
    // {
    //     // I wonder how easily this could run through the assigned_to routes printing off a list of each, for each day?
    //     // return Route::where('assigned_to', 'Catalin')->where('delivery_day', 'Monday')->where('week_start', '90718');
    //     return Route::where('week_start', '300718')->orderBy('assigned_to', 'asc')->orderBy('position_on_route', 'asc');
    // }

} // End of - class RoutesExport implements WithMultipleSheets

class RoutesCollectionNew implements
FromView,
WithTitle,
WithHeadings,
WithEvents
{
    // use Exportable;

    private $routesolo;
    private $week_starting;

    public function __construct($routesolo, $week_starting)
    {
        $this->routesolo = $routesolo;
        $this->week_starting = $week_starting;
    }

    public function headings(): array
    {
      return [
          'id',
          'week_start',
          'company_name',
          'postcode',
          'address',
          'delivery_information',
          'fruit_crates',
          'fruit_boxes',
          'milk_2l_semi_skimmed',
          'milk_2l_skimmed',
          'milk_2l_whole',
          'milk_1l_semi_skimmed',
          'milk_1l_skimmed',
          'milk_1l_whole',
          'milk_1l_alt_coconut',
          'milk_1l_alt_unsweetened_almond',
          'milk_1l_alt_almond',
          'milk_1l_alt_unsweetened_soya',
          'milk_1l_alt_soya',
          'milk_1l_alt_oat',
          'milk_1l_alt_rice',
          'milk_1l_alt_cashew',
          'milk_1l_alt_lactose_free_semi',
          'drinks',
          'snacks',
          'other',
          'assigned_to',
          'delivery_day',
          'position_on_route',
          'created_at',
          'updated_at',
      ];
    }

     public function view(): View
    {
        // First we need to check for orders that are due for delivery this week.  We can compare their next delivery date with the current week start date.
        $currentWeekStart = Weekstart::findOrFail(1);

        // If it matches, it's on for delivery this week.
        $fruitboxesForDelivery = FruitBox::where('next_delivery', $currentWeekStart->current)->where('is_active', 'Active')->get();

        // Now the same for milk, and yes I called the same field, with the same purpose something different each time.  I shouldn't be allowed to wield this much power.
        $milkboxesForDelivery = MilkBox::where('next_delivery_week_start', $currentWeekStart->current)->where('is_active', 'Active')->get();

        // Let's grab all the routes. (old approach)
        //$routeInfoAll = Route::where('assigned_to', $this->routesolo)->where('is_active', 'Active')->get();
        
        // New system approach
        $assigned_route = AssignedRoute::where('name', $this->routesolo)->get();
        $routeInfoAll = CompanyRoute::where('assigned_route_id', $assigned_route[0]->id)->where('is_active', 'Active')->get();
        

        // We will want to build the routes based on the 'Assigned To' column, so let's grab that now.
        // $assigned_route = Route::select('assigned_to')->distinct()->get();

        foreach ($routeInfoAll as $routeInfoSolo)
        {
            // ---------- Fruit Deliveries ---------- //

            // For each route in the routes table, we check the associated Company ID for a FruitBox - that's Active, On Delivery For This Week and on this Delivery Day.
            $fruitboxesForDelivery = FruitBox::where('company_id', $routeInfoSolo->company_id)->where('next_delivery', $currentWeekStart->current)
                                                ->where('delivery_day', $routeInfoSolo->delivery_day)->where('is_active', 'Active')->get();
            // Set variable value.
            $fruitbox_totals = 0;

            // If there are more than one we need to generate a total for the route by adding the box totals together.
            if (count($fruitboxesForDelivery) >= 1) {
                foreach($fruitboxesForDelivery as $fruitbox) {
                        $fruitbox_totals += $fruitbox->fruitbox_total;
                }
                // Then we overwrite the existing total attached to the route.
                $routeInfoSolo->fruit_boxes = $fruitbox_totals;
            }

            // If we didn't find any then we can add a string to search for in the template.  This was also for testing purposes and we could move this logic to the template.
            if (count($fruitboxesForDelivery) == 0) {
                // dd('None for this week!');
                $fruitboxesForDelivery = 'None for this week!';
                $routeInfoSolo->fruit_boxes = $fruitbox_totals;
            }

            // Now we can create a fruit entry into the route collection and add the fruitbox(es).
            $routeInfoSolo['fruit'] = $fruitboxesForDelivery;

            // ---------- Milk Deliveries ---------- //

            // For each route in the routes table, we check the associated Company ID for a MilkBox - that's Active, On Delivery For This Week and on this Delivery Day.
            $milkboxesForDelivery = MilkBox::where('company_id', $routeInfoSolo->company_id)->where('next_delivery_week_start', $currentWeekStart->current)
                                           ->where('delivery_day', $routeInfoSolo->delivery_day)->where('is_active', 'Active')->get();

            // Unlike FruitBoxes there shouldn't be any more than one entry, so totalling isn't necessary - however there may be no milk on the route.
            // If this is the case we need to set the milk totals to 0 for all the options, either here or in the template.  For now I'm going with another 'None For This Week!'.
            if (count($milkboxesForDelivery) == 0) {
                // dd('None for this week!');
                $milkboxesForDelivery = 'None for this week!';
            }

            // Same process with milk, create milk entry and add the information we have.
            $routeInfoSolo['milk'] = $milkboxesForDelivery;
            
            // ------------ Snacks, Drinks & Other ------------ //
            
            // Declare the total variables and set them to 0 before we begin each route.
            
            $snackbox_total = 0;
            $drinkbox_total = 0;
            $other_items_list = '';
            
            // This will grab each entry in the snackbox, not each specific snackbox (i.e we only need to grab one entry per snackbox_id)
            $snackboxesForDelivery = SnackBox::where('company_id', $routeInfoSolo->company_id)->where('next_delivery_week', $currentWeekStart->current)
                                             ->where('delivery_day', $routeInfoSolo->delivery_day)->where('is_active', 'Active')
                                             ->where('delivered_by', 'OP')->get();
                                             
            // Good old groupBy will give us the means to select the first entry from each box and grab the number of boxes.
            $snackboxesGroupedById = $snackboxesForDelivery->groupBy('snackbox_id');
            
            // If there happened to be two snackboxes out for delivery on the same route, this would still keep an accurate number of boxes.
            foreach ($snackboxesGroupedById as $snackbox) {
            
                $snackbox_total += $snackbox[0]->no_of_boxes;
            }
            // Now we save the (possibly combined) total
            $routeInfoSolo->snacks = $snackbox_total;
            
            // Time to do the same with drinks, however this will need to be handled slightly differently as the drinks are sold in cases,
            // so the box total here really reflects the number of cases, or in other words, each individual entry in the box.                         
            $drinkboxesForDelivery = DrinkBox::where('company_id', $routeInfoSolo->company_id)->where('next_delivery_week', $currentWeekStart->current)
                                             ->where('delivery_day', $routeInfoSolo->delivery_day)->where('is_active', 'Active')->get();
            // We still want to group them.                     
            $drinkboxesGroupedById = $drinkboxesForDelivery->groupBy('drinkbox_id');
            
            foreach ($drinkboxesGroupedById as $drinkbox) {
                // But now we need to go down another level and get to the items themselves, in order to loop through.
                foreach ($drinkbox as $drink) {
                    $drinkbox_total += $drink->no_of_boxes;
                }
            }
            // And save this total to the route.
            $routeInfoSolo->drinks = $drinkbox_total;                             
            
            // Finally we have the other category, which is a mishmash of items.  Each entry needs to display its name and quantity.                    
            $otherboxesForDelivery = OtherBox::where('company_id', $routeInfoSolo->company_id)->where('next_delivery_week', $currentWeekStart->current)
                                             ->where('delivery_day', $routeInfoSolo->delivery_day)->where('is_active', 'Active')->get();                     
            
            // We still want to group them.                     
            $otherboxesGroupedById = $otherboxesForDelivery->groupBy('otherbox_id');
            
            foreach ($otherboxesGroupedById as $otherbox) {
                // But now we need to go down another level and get to the items themselves, in order to loop through.
                foreach ($otherbox as $other_item) {
                    
                    // The blade template wants a string, so let's create one with all the orders chained together and separated by a comma.
                    // In the export styling code, I want to explode the string with line breaks in place of comma's but this isn't an immediate priority.
                    $other_items_list .= $other_item->quantity . ' x ' . $other_item->name . ', ';
                }
            }
            //dd($other_items_list);
            $routeInfoSolo->other = $other_items_list;

            // ------------ End of Snacks, Drinks & Other ------------ //
            
            // ----- For Debugging Purposes ----- //
            
            // A nice little way to check a specific result for testing purposes.  I can comment it out for now but may reuse again in the near future.
            // if ($routeInfoSolo->company_id == 55 && $routeInfoSolo->delivery_day == 'Monday') {
            //     dd($routeInfoSolo);
            // }
            
            // ----- End Of For Debugging Purposes ----- //

            // Now we've added the entries we need to the route, we can build an array of collections and send it to the 'order-processing' template for outputting.
            // Although if they don't have anything scheduled for delivery we can ignore them this week.
            if ($routeInfoSolo->milk == 'None for this week!' && $routeInfoSolo->fruit == 'None for this week!') {
            } else {
                // Otherwise we can add them here.
                $routesAndOrders[] = $routeInfoSolo;
            }

            // dd($routeInfoAll);
            // dd($routesAndOrders);

        }
        if (empty($routesAndOrders)) {
            
            $routesAndOrders = [];
        } else {
            $reorder_by_position = function($a, $b)
            {
                // // This is using the new and sexy spaceship operator to compare company string names and return them in alphabetical order.
                // $outcome = $a->assigned_to <=> $b->assigned_to;
                // 
                // if ($a->assigned_to == $b->assigned_to) {
                    $outcome = $a->position_on_route <=> $b->position_on_route;
                // }
                // Combined with usort, some background php magic will return the (alpabetically prior) item.
                return $outcome;
            };
            
            usort($routesAndOrders, $reorder_by_position);
        }
        // dd($routesAndOrders);
        
        return view ('exports.order-processing', [
            'routes' => $routesAndOrders
        //    'assigned_route' => $assigned_route // I don't think this is actually being used for anything.  Holding on to it for now as a reminder to that chain of thought.
        ]);
        
        // return view('exports.routes', [
        //     'routes' => Route::all()->where('week_start', $this->week_starting)->where('assigned_to', $this->routesolo)->sortBy('position_on_route')
        // ]);
    }

   /**
    * @return string
    */
   public function title(): string
   {
       return $this->routesolo;
   }

   /**
    * @return array
    */
   public function registerEvents(): array
   {

       return [
           AfterSheet::class    => function(AfterSheet $event) {
               // dd($event);
               $highestRow = $event->sheet->getHighestRow();
               $rowWidth = $event->sheet->getHighestColumn();

               foreach ($event->sheet->getRowIterator() as $row) {

                   $cellIterator = $row->getCellIterator();
                   $cellIterator->setIterateOnlyExistingCells(false); // Loop all cells, even if it is not set
                   foreach ($cellIterator as $cell) {
                       if ($cell !== null) {

                           if ($cell == 'Week Start') {

                               $selectedRow = $row->getRowIndex();

                               $selectedCell = 'A' . $selectedRow . ':' . $rowWidth . $selectedRow; //P2
                               // $selectedRow = $row->getRowIndex();
                               $event->sheet->styleCells(
                                 $selectedCell, // Cell Range
                                 [ // Styles Array
                                     'borders' => [
                                         'outline' => [
                                             'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                                             'color' => ['argb' => 'AFFF46'],
                                         ],
                                     ], // end of borders
                                     'fill' => [
                                                 'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                                                 'color' => [
                                                   'argb' => '93DA38'
                                                 ]
                                     ] // end of fill
                                 ] // end of styles array
                             ); // end of styleCells function parameters.
                         } // end of if ($cell == TBC)
                       } else {
                           continue;
                       }
                   }
               } // end of foreach statement
               $cellRange = 'A1:AA1'; // All headers
               $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
           },
       ];
   }

       /**
       * @return Builder
       */

       // Keeping this here purely as an example of using query() with laravel excel as this was working before I opted for View() instead.

      // public function query()
      // {
      //     // dd($this->$routesolo);
      //     return Route
      //         ::query()
      //         ->where('assigned_to', $this->routesolo)
      //         ->where('week_start', $this->week_starting)
      //         ->orderBy('position_on_route', 'asc');
      // }

}