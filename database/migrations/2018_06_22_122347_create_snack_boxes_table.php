<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSnackBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('snack_boxes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('week_start');
            // $table->string('delivery_day')->nullable();
            $table->string('delivered_by');
            // $table->string('on_for_delivery');
            // $table->string('office_type')->nullable();
            // $table->string('last_delivery')->nullable();
            // $table->string('frequency')->nullable();
            // $table->string('notes')->nullable();
            // $table->string('likes')->nullable();
            // $table->string('dislikes')->nullable();
            // $table->integer('total_value')->default('0');
            // $table->integer('size_of_box')->default('0');
            $table->integer('no_of_boxes_split_between')->default('0');
            $table->string('company_name');
            // $table->integer('discount')->default('0');
            $table->integer('SN_9BA_FRU')->default('0');
            $table->integer('SN_9BA_NUT')->default('0');
            $table->integer('SN_9BA_ORI')->default('0');
            $table->integer('SN_9BA_FLA')->default('0');
            $table->integer('SN_9BA_ALM')->default('0');
            $table->integer('SN_9BA_APR')->default('0');
            $table->integer('SN_9BA_CAS')->default('0');
            $table->integer('SN_9BA_KIC')->default('0');
            $table->integer('SN_9BA_PEA')->default('0');
            $table->integer('SN_9BA_CHI')->default('0');
            $table->integer('SN_9BA_HAZ')->default('0');
            $table->integer('SN_9BA_RAS')->default('0');
            $table->integer('SN_CLE_STR')->default('0');
            $table->integer('SN_CLE_GOL')->default('0');
            $table->integer('SN_CLE_CRA')->default('0');
            $table->integer('SN_GET_MIX')->default('0');
            $table->integer('SN_GET_STR')->default('0');
            $table->integer('SN_GET_MAN')->default('0');
            $table->integer('SN_GET_RAS')->default('0');
            $table->integer('SN_GET_PIN')->default('0');
            $table->integer('SN_GET_OG')->default('0');
            $table->integer('SN_NKD_CCT')->default('0');
            $table->integer('SN_NKD_LEM')->default('0');
            $table->integer('SN_NKD_PNT')->default('0');
            $table->integer('SN_NKD_BKW')->default('0');
            $table->integer('SN_NKD_CDL')->default('0');
            $table->integer('SN_NKD_BBM')->default('0');
            $table->integer('SN_NKD_COG')->default('0');
            $table->integer('SN_NKD_CSW')->default('0');
            $table->integer('SN_NKD_BRY')->default('0');
            $table->integer('SN_SBB_APL')->default('0');
            $table->integer('SN_SBB_BTR')->default('0');
            $table->integer('SN_SBB_CRT')->default('0');
            $table->integer('SN_BAB_BRO')->default('0');
            $table->integer('SN_BAB_PEC')->default('0');
            $table->integer('SN_BAB_BIL')->default('0');
            $table->integer('SN_BAB_FLA')->default('0');
            $table->integer('SN_BAB_APR')->default('0');
            $table->integer('SN_BAB_GRA')->default('0');
            $table->integer('SN_BAB_BRM')->default('0');
            $table->integer('SN_BAB_PEM')->default('0');
            $table->integer('SN_BAB_FLM')->default('0');
            $table->integer('SN_BAB_GRM')->default('0');
            $table->integer('SN_BAB_BWC')->default('0');
            $table->integer('SN_BAB_TFC')->default('0');
            $table->integer('SN_BAB_RCC')->default('0');
            $table->integer('SN_PUL_ALM')->default('0');
            $table->integer('SN_PUL_PCC')->default('0');
            $table->integer('SN_PUL_SCB')->default('0');
            $table->integer('SN_PUL_MAP')->default('0');
            $table->integer('SN_PUL_PCP')->default('0');
            $table->integer('SN_LUD_CAS')->default('0');
            $table->integer('SN_LUD_ALM')->default('0');
            $table->integer('SN_LUD_UN_')->default('0');
            $table->integer('SN_LUD_HON')->default('0');
            $table->integer('SN_LUD_PIS')->default('0');
            $table->integer('SN_LUD_CHI')->default('0');
            $table->integer('SN_LUD_NUT')->default('0');
            $table->integer('SN_LUD_AMD')->default('0');
            $table->integer('SN_LUD_CHW')->default('0');
            $table->integer('SN_LUD_WAL')->default('0');
            $table->integer('SN_QUI_CHI')->default('0');
            $table->integer('SN_QUI_ALM')->default('0');
            $table->integer('SN_QUI_PEP')->default('0');
            $table->integer('SN_QUI_JAL')->default('0');
            $table->integer('SN_WHI_BER')->default('0');
            $table->integer('SN_WHI_TOF')->default('0');
            $table->integer('SN_WHI_FRU')->default('0');
            $table->integer('SN_WHI_ORA')->default('0');
            $table->integer('SN_WHI_RAI')->default('0');
            $table->integer('SN_MGH_HCB')->default('0');
            $table->integer('SN_RHA_BBZ')->default('0');
            $table->integer('SN_RHA_GOJ')->default('0');
            $table->integer('SN_RHA_MBC')->default('0');
            $table->integer('SN_BOU_TAM')->default('0');
            $table->integer('SN_BOU_CAY')->default('0');
            $table->integer('SN_BOU_ORA')->default('0');
            $table->integer('SN_MON_DAR')->default('0');
            $table->integer('SN_MON_BUT')->default('0');
            $table->integer('SN_MON_CHL')->default('0');
            $table->integer('SN_MON_ORG')->default('0');
            $table->integer('SN_MON_MIL')->default('0');
            $table->integer('SN_PKZ_ORA')->default('0');
            $table->integer('SN_PKZ_CAR')->default('0');
            $table->integer('SN_PKZ_CHO')->default('0');
            $table->integer('SN_JUS_YOG')->default('0');
            $table->integer('SN_JUS_FRU')->default('0');
            $table->integer('SN_JUS_AGP')->default('0');
            $table->integer('SN_JUS_CGP')->default('0');
            $table->integer('SN_JUS_SGP')->default('0');
            $table->integer('SN_CRE_GOJ')->default('0');
            $table->integer('SN_CRE_CAC')->default('0');
            $table->integer('SN_CRE_GIN')->default('0');
            $table->integer('SN_ISL_SMO')->default('0');
            $table->integer('SN_ISL_ORI')->default('0');
            $table->integer('SN_ISL_BLA')->default('0');
            $table->integer('SN_CBC_PEP')->default('0');
            $table->integer('SN_CBC_PER')->default('0');
            $table->integer('SN_CBC_TER')->default('0');
            $table->integer('SN_CBC_CHI')->default('0');
            $table->integer('SN_CBC_GAR')->default('0');
            $table->integer('SN_CBC_BBQ')->default('0');
            $table->integer('SN_PBC_CHE')->default('0');
            $table->integer('SN_PBC_PBU')->default('0');
            $table->integer('SN_PBC_RAS')->default('0');
            $table->integer('SN_PBC_LEM')->default('0');
            $table->integer('SN_SNA_MAN')->default('0');
            $table->integer('SN_SNA_RAS')->default('0');
            $table->integer('SN_SNA_BLU')->default('0');
            $table->integer('SN_TYR_CHE')->default('0');
            $table->integer('SN_TYR_LUD')->default('0');
            $table->integer('SN_TYR_SAL')->default('0');
            $table->integer('SN_TYR_SWE')->default('0');
            $table->integer('SN_TYR_PRC')->default('0');
            $table->integer('SN_TYR_WOR')->default('0');
            $table->integer('SN_TYR_BEE')->default('0');
            $table->integer('SN_TYR_LIG')->default('0');
            $table->integer('SN_TYR_ROA')->default('0');
            $table->integer('SN_TYR_BUT')->default('0');
            $table->integer('SN_TYR_VEG')->default('0');
            $table->integer('SN_TYR_HAB')->default('0');
            $table->integer('SN_TYR_RIC')->default('0');
            $table->integer('SN_HEC_SEA')->default('0');
            $table->integer('SN_HEC_CHO')->default('0');
            $table->integer('SN_HEC_RED')->default('0');
            $table->integer('SN_SUP_CHE')->default('0');
            $table->integer('SN_SUP_VIN')->default('0');
            $table->integer('SN_PAS_TOM')->default('0');
            $table->integer('SN_PAS_PES')->default('0');
            $table->integer('SN_PAS_ARR')->default('0');
            $table->integer('SN_PAS_CHI')->default('0');
            $table->integer('SN_EAT_LEN')->default('0');
            $table->integer('SN_EAT_CRE')->default('0');
            $table->integer('SN_EAT_SEA')->default('0');
            $table->integer('SN_EAT_DIL')->default('0');
            $table->integer('SN_EAT_BAS')->default('0');
            $table->integer('SN_EAT_SAL')->default('0');
            $table->integer('SN_EAT_SOU')->default('0');
            $table->integer('SN_EAT_HOT')->default('0');
            $table->integer('SN_EAT_PLA')->default('0');
            $table->integer('SN_EAT_VG')->default('0');
            $table->integer('SN_EAT_VG2')->default('0');
            $table->integer('SN_WOL_PEA')->default('0');
            $table->integer('SN_WOL_HON')->default('0');
            $table->integer('SN_WOL_CRE')->default('0');
            $table->integer('SN_PEP_PEP')->default('0');
            $table->integer('SN_PEP_SPE')->default('0');
            $table->integer('SN_CHE_GUM')->default('0');
            $table->integer('SN_REA_CHI')->default('0');
            $table->integer('SN_REA_BAS')->default('0');
            $table->integer('SN_CHP_BP')->default('0');
            $table->integer('SN_CHP_CRY')->default('0');
            $table->integer('SN_NIB_PES')->default('0');
            $table->integer('SN_NIB_ROS')->default('0');
            $table->integer('SN_NIB_SOC')->default('0');
            $table->integer('SN_NIB_COB')->default('0');
            $table->integer('SN_NIB_OCB')->default('0');
            $table->integer('SN_JAS_CAC')->default('0');
            $table->integer('SN_JAS_SSC')->default('0');
            $table->integer('SN_HOO_SMO')->default('0');
            $table->integer('SN_HOO_CHO')->default('0');
            $table->integer('SN_HOO_PEP')->default('0');
            $table->integer('SN_PS_CHE')->default('0');
            $table->integer('SN_PS_BNU')->default('0');
            $table->integer('SN_PS_PEC')->default('0');
            $table->integer('SN_PS_CHO')->default('0');
            $table->integer('SN_PS_SAL')->default('0');
            $table->integer('SN_PS_BER')->default('0');
            $table->integer('SN_STO_APP')->default('0');
            $table->integer('SN_STO_APR')->default('0');
            $table->integer('SN_STO_BLU')->default('0');
            $table->integer('SN_STO_CHE')->default('0');
            $table->integer('SN_STO_CLA')->default('0');
            $table->integer('SN_STO_FIG')->default('0');
            $table->integer('SN_STO_ORA')->default('0');
            $table->integer('SN_STO_RAS')->default('0');
            $table->integer('SN_STO_WHI')->default('0');
            $table->integer('SN_NAH_CP')->default('0');
            $table->integer('SN_NAH_CC')->default('0');
            $table->integer('SN_NAH_CS')->default('0');
            $table->integer('SN_NAH_BC')->default('0');
            $table->integer('SN_NAH_BQ')->default('0');
            $table->integer('SN_LP_SWE')->default('0');
            $table->integer('SN_LP_SAL')->default('0');
            $table->integer('SN_NT_WAS')->default('0');
            $table->integer('SN_NT_SLT')->default('0');
            $table->integer('SN_NT_HTC')->default('0');
            $table->integer('SN_WP_SH')->default('0');
            $table->integer('SN_WP_NN')->default('0');
            $table->integer('SN_WOL_CUR')->default('0');
            $table->integer('SN_WOL_GAR')->default('0');
            $table->integer('SN_WOL_VEG')->default('0');
            $table->integer('SN_CHE_GGS')->default('0');
            $table->integer('SN_CHI_PLS')->default('0');
            $table->integer('SN_CHI_PLC')->default('0');
            $table->integer('SN_CHI_CLS')->default('0');
            $table->integer('SN_CHI_CSC')->default('0');
            $table->integer('SN_PIP_PAC')->default('0');
            $table->integer('SN_FRA_BIS')->default('0');
            $table->integer('DR_ROU_E25')->default('0');
            $table->integer('DR_ROU_F25')->default('0');
            $table->integer('DR_ROU_D25')->default('0');
            $table->integer('DR_CRU_DAR')->default('0');
            $table->integer('DR_CRU_LIG')->default('0');
            $table->integer('DR_CRU_INT')->default('0');
            $table->integer('DR_CRU_DEC')->default('0');
            $table->integer('DR_COL_DIS')->default('0');
            $table->integer('DR_COL_DIL')->default('0');
            $table->integer('DR_COL_DES')->default('0');
            $table->integer('DR_COL_DEL')->default('0');
            $table->integer('DR_LIT_FRE')->default('0');
            $table->integer('DR_LIT_RIC')->default('0');
            $table->integer('DR_LIT_IRI')->default('0');
            $table->integer('DR_LIT_CAF')->default('0');
            $table->integer('DR_LIT_CAR')->default('0');
            $table->integer('DR_LIT_MAP')->default('0');
            $table->integer('DR_LIT_SWI')->default('0');
            $table->integer('DR_LIT_HAV')->default('0');
            $table->integer('DR_LIT_SPI')->default('0');
            $table->integer('DR_LIT_CHO')->default('0');
            $table->integer('DR_LIT_ISL')->default('0');
            $table->integer('DR_LIT_CHR')->default('0');
            $table->integer('DR_LIT_COL')->default('0');
            $table->integer('DR_LIT_AFR')->default('0');
            $table->integer('DR_LIT_ITA')->default('0');
            $table->integer('DR_LIT_DEC')->default('0');
            $table->integer('DR_CLI_DES')->default('0');
            $table->integer('DR_CLI_NOR')->default('0');
            $table->integer('DR_CLI_HOT')->default('0');
            $table->integer('DR_CLI_TEA')->default('0');
            $table->integer('DR_PG_??11')->default('0');
            $table->integer('DR_YOR_??12')->default('0');
            $table->integer('DR_CLI_PEP')->default('0');
            $table->integer('DR_CLI_ENG')->default('0');
            $table->integer('DR_CLI_EAR')->default('0');
            $table->integer('DR_CLI_GRE')->default('0');
            $table->integer('DR_CLI_CAM')->default('0');
            $table->integer('DR_CLI_RED')->default('0');
            $table->integer('DR_CLI_DEE')->default('0');
            $table->integer('DR_CLI_WIL')->default('0');
            $table->integer('DR_CLI_BLA')->default('0');
            $table->integer('DR_CLI_ARO')->default('0');
            $table->integer('DR_CLI_INF')->default('0');
            $table->integer('DR_JOE_ENG')->default('0');
            $table->integer('DR_JOE_EAR')->default('0');
            $table->integer('DR_JOE_GRE')->default('0');
            $table->integer('DR_JOE_JAS')->default('0');
            $table->integer('DR_JOE_WHI')->default('0');
            $table->integer('DR_JOE_PRO')->default('0');
            $table->integer('DR_JOE_CHA')->default('0');
            $table->integer('DR_JOE_ST')->default('0');
            $table->integer('DR_JOE_BER')->default('0');
            $table->integer('DR_JOE_MIN')->default('0');
            $table->integer('DR_JOE_CHO')->default('0');
            $table->integer('DR_JEN_ENG')->default('0');
            $table->integer('DR_JEN_EAR')->default('0');
            $table->integer('DR_PRI_ST5')->default('0');
            $table->integer('DR_PRI_SP5')->default('0');
            $table->integer('DR_PRI_ST1')->default('0');
            $table->integer('DR_PRI_SP1')->default('0');
            $table->integer('DR_PRI_ST3')->default('0');
            $table->integer('DR_PRI_SP3')->default('0');
            $table->integer('DR_PRI_ST7')->default('0');
            $table->integer('DR_PRI_SP7')->default('0');
            $table->integer('DR_LUS_ORA')->default('0');
            $table->integer('DR_LUS_GIN')->default('0');
            $table->integer('DR_LUS_ELD')->default('0');
            $table->integer('DR_LUS_APR')->default('0');
            $table->integer('DR_LUS_PEA')->default('0');
            $table->integer('DR_LOV_PEA')->default('0');
            $table->integer('DR_LOV_GIN')->default('0');
            $table->integer('DR_LOV_GLA')->default('0');
            $table->integer('DR_LOV_RAS')->default('0');
            $table->integer('DR_LOV_DAN')->default('0');
            $table->integer('DR_LOV_ELD')->default('0');
            $table->integer('DR_FRO_TOM')->default('0');
            $table->integer('DR_FRO_GRA')->default('0');
            $table->integer('DR_FRO_MAN')->default('0');
            $table->integer('DR_FRO_APP')->default('0');
            $table->integer('DR_FRO_CRA')->default('0');
            $table->integer('DR_FRO_PIN')->default('0');
            $table->integer('DR_FRO_ORA')->default('0');
            $table->integer('DR_BER_STB')->default('0');
            $table->integer('DR_BER_STP')->default('0');
            $table->integer('DR_BER_STC')->default('0');
            $table->integer('DR_BER_STL')->default('0');
            $table->integer('DR_BER_SPB')->default('0');
            $table->integer('DR_BER_SPP')->default('0');
            $table->integer('DR_BER_SPC')->default('0');
            $table->integer('DR_BER_SPL')->default('0');
            $table->integer('DR_BEL_CEL')->default('0');
            $table->integer('DR_BEL_CRL')->default('0');
            $table->integer('DR_BEL_CCL')->default('0');
            $table->integer('DR_BEL_GEL')->default('0');
            $table->integer('DR_BEL_GRL')->default('0');
            $table->integer('DR_BEL_GLL')->default('0');
            $table->integer('DR_BEL_GER')->default('0');
            $table->integer('DR_BEL_GMP')->default('0');
            $table->integer('DR_BEL_GCP')->default('0');
            $table->integer('DR_BEL_ECO')->default('0');
            $table->integer('DR_BEL_LCO')->default('0');
            $table->integer('DR_BEL_RAR')->default('0');
            $table->integer('DR_BEL_RAL')->default('0');
            $table->integer('DR_BEL_HLG')->default('0');
            $table->integer('DR_BEL_BLB')->default('0');
            $table->integer('DR_KAR_C25')->default('0');
            $table->integer('DR_KAR_S25')->default('0');
            $table->integer('DR_KAR_G25')->default('0');
            $table->integer('DR_KAR_L25')->default('0');
            $table->integer('DR_KAR_GL3')->default('0');
            $table->integer('DR_KAR_GL4')->default('0');
            $table->integer('DR_KAR_GI3')->default('0');
            $table->integer('DR_KAR_LE3')->default('0');
            $table->integer('DR_VIR_LEM')->default('0');
            $table->integer('DR_VIR_BER')->default('0');
            $table->integer('DR_JIM_ORI')->default('0');
            $table->integer('DR_JIM_SKI')->default('0');
            $table->integer('DR_JIM_MOC')->default('0');
            $table->integer('DR_BAM_CHO')->default('0');
            $table->integer('DR_BAM_BAN')->default('0');
            $table->integer('DR_SIM_GRA')->default('0');
            $table->integer('DR_SIM_ALO')->default('0');
            $table->integer('DR_CHI_COC')->default('0');
            $table->integer('DR_GM_VTA')->default('0');
            $table->integer('DR_GM_VTB')->default('0');
            $table->integer('DR_GM_VTC')->default('0');
            $table->integer('DR_GM_VTD')->default('0');
            $table->integer('DR_GM_MUL')->default('0');
            $table->integer('DR_JOH_APP')->default('0');
            $table->integer('DR_JOH_ORA')->default('0');
            $table->integer('DR_TEA_ALL')->default('0');
            $table->integer('DR_TEA_EAR')->default('0');
            $table->integer('DR_TEA_CHI')->default('0');
            $table->integer('DR_TEA_DET')->default('0');
            $table->integer('DR_TEA_SKI')->default('0');
            $table->integer('DR_TEA_EVE')->default('0');
            $table->integer('DR_TEA_FLU')->default('0');
            $table->integer('DR_TEA_GOO')->default('0');
            $table->integer('DR_SUG_WHI')->default('0');
            $table->integer('DR_SUG_DAM')->default('0');
            $table->integer('DR_YOR_WB')->default('0');
            $table->integer('DR_WGN_GND')->default('0');
            $table->integer('DR_CRB_ONE')->default('0');
            $table->integer('DR_CRB_THR')->default('0');
            $table->integer('DR_CRB_CASE')->default('0');
            $table->integer('DR_WIN_PIN')->default('0');
            $table->integer('DR_WIN_PRI')->default('0');
            $table->integer('DR_WIN_CAT')->default('0');
            $table->integer('DR_WIN_PRO')->default('0');
            $table->integer('DR_COC_COL')->default('0');
            $table->integer('DR_COC_DIE')->default('0');
            $table->integer('DR_FAN_ZER')->default('0');
            $table->integer('DR_PNT_BTR')->default('0');
            $table->integer('DR_BRD_WML')->default('0');
            $table->integer('DR_HON_SQU')->default('0');
            $table->integer('DR_MAR_MTE')->default('0');
            $table->integer('DR_BUT_YEO')->default('0');
            $table->integer('DR_NAT_CPJ')->default('0');
            $table->integer('DR_PEP_MIN')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('snack_boxes');
    }
}
