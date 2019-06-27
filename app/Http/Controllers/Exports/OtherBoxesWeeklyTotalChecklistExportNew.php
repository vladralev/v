<?php

namespace App\Http\Controllers\Exports;

use App\WeekStart;
use App\OtherBox;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Sheet;

class OtherBoxesWeeklyTotalChecklistExportNew implements
FromView,
WithTitle,
ShouldAutoSize
// WithHeadings,
//WithEvents
{
    public function __construct()
    {
        $currentWeekStart = Weekstart::findOrFail(1);
        
        $this->week_start = $currentWeekStart->current;
    
        //dd($this->day);
    }
    
    public function view(): View
    {
        // First we need to check for orders that are due for delivery this week.  We can compare their next delivery date with the current week start date.
        
        // Other than a valid week start, all we need to know is what day we're processing and that the orders are 'Active'.
        $otherboxes = OtherBox::where('is_active', 'Active')->where('next_delivery_week', $this->week_start)->get();
        
        // dd($otherboxes);
        // Rather than grouping the boxes by otherbox_id we actually want to know how many of a product we need to buy, so let's group them by product_id instead.
        $groupedByProductId = $otherboxes->groupBy('product_id');

        // dd($groupedByProductId);
        $products = [];
        
        foreach ($groupedByProductId as $otherbox) {

            $product = (object) [];
            $product->name = $otherbox[0]->name;
            $quantity = 0;
            
            foreach ($otherbox as $item) {
                $quantity += $item->quantity;
            }
            
            $product->quantity = $quantity;
            
            $products[] = $product;
        }
        
        // dd($products);

        return view('exports.new-otherbox-items-checklist-weekly-total', [
                    'week_start'            =>      $this->week_start,
                    'products'              =>      $products,
                    
                ]);
    }
    
    public function title(): string
    {
        return $this->week_start;
    }
    
    public function registerEvents(): array
    {
    
    }
}