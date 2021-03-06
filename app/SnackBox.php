<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SnackBox extends Model
{
    //
    protected $fillable = [

        'weekly_start',
        // 'delivery_day',
        'delivered_by',
        // 'on_for_delivery',
        // 'office_type',
        // 'last_delivery',
        // 'frequency',
        // 'notes',
        // 'likes',
        // 'dislikes',
        // 'total_value',
        // 'size_of_box',
        'no_of_boxes_split_between',
        'company_name',
        // 'discount',
        'SN_9BA_FRU',
        'SN_9BA_NUT',
        'SN_9BA_ORI',
        'SN_9BA_FLA',
        'SN_9BA_ALM',
        'SN_9BA_APR',
        'SN_9BA_CAS',
        'SN_9BA_KIC',
        'SN_9BA_PEA',
        'SN_9BA_CHI',
        'SN_9BA_HAZ',
        'SN_9BA_RAS',
        'SN_CLE_STR',
        'SN_CLE_GOL',
        'SN_CLE_CRA',
        'SN_GET_MIX',
        'SN_GET_STR',
        'SN_GET_MAN',
        'SN_GET_RAS',
        'SN_GET_PIN',
        'SN_GET_OG',
        'SN_NKD_CCT',
        'SN_NKD_LEM',
        'SN_NKD_PNT',
        'SN_NKD_BKW',
        'SN_NKD_CDL',
        'SN_NKD_BBM',
        'SN_NKD_COG',
        'SN_NKD_CSW',
        'SN_NKD_BRY',
        'SN_SBB_APL',
        'SN_SBB_BTR',
        'SN_SBB_CRT',
        'SN_BAB_BRO',
        'SN_BAB_PEC',
        'SN_BAB_BIL',
        'SN_BAB_FLA',
        'SN_BAB_APR',
        'SN_BAB_GRA',
        'SN_BAB_BRM',
        'SN_BAB_PEM',
        'SN_BAB_FLM',
        'SN_BAB_GRM',
        'SN_BAB_BWC',
        'SN_BAB_TFC',
        'SN_BAB_RCC',
        'SN_PUL_ALM',
        'SN_PUL_PCC',
        'SN_PUL_SCB',
        'SN_PUL_MAP',
        'SN_PUL_PCP',
        'SN_LUD_CAS',
        'SN_LUD_ALM',
        'SN_LUD_UN_',
        'SN_LUD_HON',
        'SN_LUD_PIS',
        'SN_LUD_CHI',
        'SN_LUD_NUT',
        'SN_LUD_AMD',
        'SN_LUD_CHW',
        'SN_LUD_WAL',
        'SN_QUI_CHI',
        'SN_QUI_ALM',
        'SN_QUI_PEP',
        'SN_QUI_JAL',
        'SN_WHI_BER',
        'SN_WHI_TOF',
        'SN_WHI_FRU',
        'SN_WHI_ORA',
        'SN_WHI_RAI',
        'SN_MGH_HCB',
        'SN_RHA_BBZ',
        'SN_RHA_GOJ',
        'SN_RHA_MBC',
        'SN_BOU_TAM',
        'SN_BOU_CAY',
        'SN_BOU_ORA',
        'SN_MON_DAR',
        'SN_MON_BUT',
        'SN_MON_CHL',
        'SN_MON_ORG',
        'SN_MON_MIL',
        'SN_PKZ_ORA',
        'SN_PKZ_CAR',
        'SN_PKZ_CHO',
        'SN_JUS_YOG',
        'SN_JUS_FRU',
        'SN_JUS_AGP',
        'SN_JUS_CGP',
        'SN_JUS_SGP',
        'SN_CRE_GOJ',
        'SN_CRE_CAC',
        'SN_CRE_GIN',
        'SN_ISL_SMO',
        'SN_ISL_ORI',
        'SN_ISL_BLA',
        'SN_CBC_PEP',
        'SN_CBC_PER',
        'SN_CBC_TER',
        'SN_CBC_CHI',
        'SN_CBC_GAR',
        'SN_CBC_BBQ',
        'SN_PBC_CHE',
        'SN_PBC_PBU',
        'SN_PBC_RAS',
        'SN_PBC_LEM',
        'SN_SNA_MAN',
        'SN_SNA_RAS',
        'SN_SNA_BLU',
        'SN_TYR_CHE',
        'SN_TYR_LUD',
        'SN_TYR_SAL',
        'SN_TYR_SWE',
        'SN_TYR_PRC',
        'SN_TYR_WOR',
        'SN_TYR_BEE',
        'SN_TYR_LIG',
        'SN_TYR_ROA',
        'SN_TYR_BUT',
        'SN_TYR_VEG',
        'SN_TYR_HAB',
        'SN_TYR_RIC',
        'SN_HEC_SEA',
        'SN_HEC_CHO',
        'SN_HEC_RED',
        'SN_SUP_CHE',
        'SN_SUP_VIN',
        'SN_PAS_TOM',
        'SN_PAS_PES',
        'SN_PAS_ARR',
        'SN_PAS_CHI',
        'SN_EAT_LEN',
        'SN_EAT_CRE',
        'SN_EAT_SEA',
        'SN_EAT_DIL',
        'SN_EAT_BAS',
        'SN_EAT_SAL',
        'SN_EAT_SOU',
        'SN_EAT_HOT',
        'SN_EAT_PLA',
        'SN_EAT_VG',
        'SN_EAT_VG2',
        'SN_WOL_PEA',
        'SN_WOL_HON',
        'SN_WOL_CRE',
        'SN_PEP_PEP',
        'SN_PEP_SPE',
        'SN_CHE_GUM',
        'SN_REA_CHI',
        'SN_REA_BAS',
        'SN_CHP_BP',
        'SN_CHP_CRY',
        'SN_NIB_PES',
        'SN_NIB_ROS',
        'SN_NIB_SOC',
        'SN_NIB_COB',
        'SN_NIB_OCB',
        'SN_JAS_CAC',
        'SN_JAS_SSC',
        'SN_HOO_SMO',
        'SN_HOO_CHO',
        'SN_HOO_PEP',
        'SN_PS_CHE',
        'SN_PS_BNU',
        'SN_PS_PEC',
        'SN_PS_CHO',
        'SN_PS_SAL',
        'SN_PS_BER',
        'SN_STO_APP',
        'SN_STO_APR',
        'SN_STO_BLU',
        'SN_STO_CHE',
        'SN_STO_CLA',
        'SN_STO_FIG',
        'SN_STO_ORA',
        'SN_STO_RAS',
        'SN_STO_WHI',
        'SN_NAH_CP',
        'SN_NAH_CC',
        'SN_NAH_CS',
        'SN_NAH_BC',
        'SN_NAH_BQ',
        'SN_LP_SWE',
        'SN_LP_SAL',
        'SN_NT_WAS',
        'SN_NT_SLT',
        'SN_NT_HTC',
        'SN_WP_SH',
        'SN_WP_NN',
        'SN_WOL_CUR',
        'SN_WOL_GAR',
        'SN_WOL_VEG',
        'SN_CHE_GGS',
        'SN_CHI_PLS',
        'SN_CHI_PLC',
        'SN_CHI_CLS',
        'SN_CHI_CSC',
        'SN_PIP_PAC',
        'SN_FRA_BIS',
        'DR_ROU_E25',
        'DR_ROU_F25',
        'DR_ROU_D25',
        'DR_CRU_DAR',
        'DR_CRU_LIG',
        'DR_CRU_INT',
        'DR_CRU_DEC',
        'DR_COL_DIS',
        'DR_COL_DIL',
        'DR_COL_DES',
        'DR_COL_DEL',
        'DR_LIT_FRE',
        'DR_LIT_RIC',
        'DR_LIT_IRI',
        'DR_LIT_CAF',
        'DR_LIT_CAR',
        'DR_LIT_MAP',
        'DR_LIT_SWI',
        'DR_LIT_HAV',
        'DR_LIT_SPI',
        'DR_LIT_CHO',
        'DR_LIT_ISL',
        'DR_LIT_CHR',
        'DR_LIT_COL',
        'DR_LIT_AFR',
        'DR_LIT_ITA',
        'DR_LIT_DEC',
        'DR_CLI_DES',
        'DR_CLI_NOR',
        'DR_CLI_HOT',
        'DR_CLI_TEA',
        'DR_PG_??11',
        'DR_YOR_??12',
        'DR_CLI_PEP',
        'DR_CLI_ENG',
        'DR_CLI_EAR',
        'DR_CLI_GRE',
        'DR_CLI_CAM',
        'DR_CLI_RED',
        'DR_CLI_DEE',
        'DR_CLI_WIL',
        'DR_CLI_BLA',
        'DR_CLI_ARO',
        'DR_CLI_INF',
        'DR_JOE_ENG',
        'DR_JOE_EAR',
        'DR_JOE_GRE',
        'DR_JOE_JAS',
        'DR_JOE_WHI',
        'DR_JOE_PRO',
        'DR_JOE_CHA',
        'DR_JOE_ST',
        'DR_JOE_BER',
        'DR_JOE_MIN',
        'DR_JOE_CHO',
        'DR_JEN_ENG',
        'DR_JEN_EAR',
        'DR_PRI_ST5',
        'DR_PRI_SP5',
        'DR_PRI_ST1',
        'DR_PRI_SP1',
        'DR_PRI_ST3',
        'DR_PRI_SP3',
        'DR_PRI_ST7',
        'DR_PRI_SP7',
        'DR_LUS_ORA',
        'DR_LUS_GIN',
        'DR_LUS_ELD',
        'DR_LUS_APR',
        'DR_LUS_PEA',
        'DR_LOV_PEA',
        'DR_LOV_GIN',
        'DR_LOV_GLA',
        'DR_LOV_RAS',
        'DR_LOV_DAN',
        'DR_LOV_ELD',
        'DR_FRO_TOM',
        'DR_FRO_GRA',
        'DR_FRO_MAN',
        'DR_FRO_APP',
        'DR_FRO_CRA',
        'DR_FRO_PIN',
        'DR_FRO_ORA',
        'DR_BER_STB',
        'DR_BER_STP',
        'DR_BER_STC',
        'DR_BER_STL',
        'DR_BER_SPB',
        'DR_BER_SPP',
        'DR_BER_SPC',
        'DR_BER_SPL',
        'DR_BEL_CEL',
        'DR_BEL_CRL',
        'DR_BEL_CCL',
        'DR_BEL_GEL',
        'DR_BEL_GRL',
        'DR_BEL_GLL',
        'DR_BEL_GER',
        'DR_BEL_GMP',
        'DR_BEL_GCP',
        'DR_BEL_ECO',
        'DR_BEL_LCO',
        'DR_BEL_RAR',
        'DR_BEL_RAL',
        'DR_BEL_HLG',
        'DR_BEL_BLB',
        'DR_KAR_C25',
        'DR_KAR_S25',
        'DR_KAR_G25',
        'DR_KAR_L25',
        'DR_KAR_GL3',
        'DR_KAR_GL4',
        'DR_KAR_GI3',
        'DR_KAR_LE3',
        'DR_VIR_LEM',
        'DR_VIR_BER',
        'DR_JIM_ORI',
        'DR_JIM_SKI',
        'DR_JIM_MOC',
        'DR_BAM_CHO',
        'DR_BAM_BAN',
        'DR_SIM_GRA',
        'DR_SIM_ALO',
        'DR_CHI_COC',
        'DR_GM_VTA',
        'DR_GM_VTB',
        'DR_GM_VTC',
        'DR_GM_VTD',
        'DR_GM_MUL',
        'DR_JOH_APP',
        'DR_JOH_ORA',
        'DR_TEA_ALL',
        'DR_TEA_EAR',
        'DR_TEA_CHI',
        'DR_TEA_DET',
        'DR_TEA_SKI',
        'DR_TEA_EVE',
        'DR_TEA_FLU',
        'DR_TEA_GOO',
        'DR_SUG_WHI',
        'DR_SUG_DAM',
        'DR_YOR_WB',
        'DR_WGN_GND',
        'DR_CRB_ONE',
        'DR_CRB_THR',
        'DR_CRB_CASE',
        'DR_WIN_PIN',
        'DR_WIN_PRI',
        'DR_WIN_CAT',
        'DR_WIN_PRO',
        'DR_COC_COL',
        'DR_COC_DIE',
        'DR_FAN_ZER',
        'DR_PNT_BTR',
        'DR_BRD_WML',
        'DR_HON_SQU',
        'DR_MAR_MTE',
        'DR_BUT_YEO',
        'DR_NAT_CPJ',
        'DR_PEP_MIN',
    ];
}
