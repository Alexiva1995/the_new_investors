<?php

namespace Database\Seeders;

use App\Models\Inversion;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class InversionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fecha = Carbon::now();

        //Inversion Test1
        Inversion::create([
            'invertido' => 20000,
            'tipo_interes' => 'lineal',
            'fecha_consignacion' => $fecha->subDays(3)->format('Y-m-d'),
            'referente' => 'GERSON OSORIO',
            'comprobante_consignacion' => '',
            'periodo_mes' => '1',
            'user_id' => 2,
            'firma_cliente' => 'ZGF0YTppbWFnZS9wbmc7YmFzZTY0LGlWQk9SdzBLR2dvQUFBQU5TVWhFVWdBQUFjMEFBQUNYQ0FZQUFBQjNKd0E0QUFBQUFYTlNSMElBcnM0YzZRQUFFeGhKUkVGVWVGN3RuVjJJbGNVZngyZHZ6U2hGZzZEVXRhQTNxQ3dsSk1XRUZsOHVLaTlXS0xCY2lEVzhLU1hKcm5iMXBrSkk3WlUxWXN1aWk5MkxXZ29GV1NpaE55Z3BDYU1pMndRdnFoWFVRaSs2MlQvZjRUK0haMDluejNuTytqeHpadWI1REJ6MjVUeG41dmY3L0liOTdyejlwbXRxYW1yS1VDQUFBUWhBQUFJUWFFbWdDOUZzeVlnSElBQUJDRUFBQXBZQW9rbEhnQUFFSUFBQkNPUWtnR2ptQk1WakVJQUFCQ0FBQVVTVFBnQUJDRUFBQWhESVNRRFJ6QW1LeHlBQUFRaEFBQUtJSm4wQUFoQ0FBQVFna0pNQW9wa1RGSTlCQUFJUWdBQUVFRTM2QUFRZ0FBRUlRQ0FuQVVRekp5Z2Vnd0FFSUFBQkNDQ2E5QUVJUUFBQ0VJQkFUZ0tJWms1UVBBWUJDRUFBQWhCQU5Pa0RFSUFBQkNBQWdad0VFTTJjb0hnTUFoQ0FBQVFnZ0dqU0J5QUFBUWhBQUFJNUNTQ2FPVUh4R0FRZ0FBRUlRQURScEE5QUFBSVFnQUFFY2hKQU5IT0M0akVJUUFBQ0VJQUFva2tmQ0lMQXVYUG56TXFWSzYwdFgzMzFsVm13WUVFUWRtRUVCQ0FBZ1N3QlJKUCtFQVNCUFh2Mm1NSEJRV3VMdmc0TURBUmhGMFpBQUFJUVFEVHBBOEVSZU9lZGQweGZYNSsxYTNoNDJHemR1alU0R3pFSUFoQ0FBQ05OK2tBUUJCRE5JTUtBRVJDQVFBc0NpQ1pkSkFnQ2lHWVFZY0FJQ0VBQTBhUVB4RUNBTmMwWW9vU05FSUFBSTAzNlFCQUV0bTNiWmc0ZE9tUnQ2ZS92TjBORFEwSFloUkVRZ0FBRXNnUVFUZnBERUFSNmVuck0rUGk0dFdYUm9rWG16Smt6UWRpRkVSQ0FBQVFRVGZwQWNBU3V1dW9xYy9ueVpXdlhuRGx6ektWTGw0S3pFWU1nQUFFSU1OS2tEM1Njd0dlZmZXYldybDA3elk1UFAvM1VQUERBQXgyM0RRTWdBQUVJTU5La0R3UkY0UGZmZnpmZDNkM1RiSnFZbURCTGxpd0p5azZNZ1FBRUlNQklrejdRY1FLSVpzZERnQUVRZ0VCT0FvaG1UbEE4Vmg0QlJMTTh0dFFNQVFnVVN3RFJMSlludGMyQ1FLTTF6YW1wcVZuVXhFY2dBQUVJbEVzQTBTeVhMN1huSUZBLzB0UmFwdFkwS1JDQUFBUkNJNEJvaGhhUkN0b3pPVGxwYnJubEZuUCsvSG5ydlhiTmF2Y3NCUUlRZ0VCb0JCRE4wQ0pTVVh0MDVFVFR0Q3E5dmIxbVpHU2tvaVJ3R3dJUUNKa0FvaGx5ZENwazIyMjMzV1orK3VrbjYvSDY5ZXZOMGFOSEsrUTlya0lBQXJFUVFEUmppVlRpZGk1YnRzeDgvLzMzMXN2NzdydlBmUDMxMTRsN2pIc1FnRUNNQkJETkdLT1dvTTJEZzROR041Mm9yRm16cGpaVm02Q3J1QVFCQ0VSTUFOR01PSGdwbVg3Z3dBR3pZOGNPNjlMZGQ5OXR2dnZ1dTVUY3d4Y0lRQ0FSQW9obUlvR00zWTNzSmRUeWhYT2FzVWNVK3lHUUpnRkVNODI0UnVkVmZZSURSRE82RUdJd0JDcEJBTkdzUkpqRGQxS2JnTFFaeUJWTnoycWFsZ0lCQ0VBZ0pBS0laa2pScUxBdEZ5NWNNUFBtemFzUjRHcXdDbmNHWElkQXdBUVF6WUNEVXpYVHVycTZhaTRQRHcrYnJWdTNWZzBCL2tJQUFvRVRRRFFERDFDVnpGUDZ2T1BIajF1WEJ3WUdqSTZoVUNBQUFRaUVSQURSRENrYUZiZmxrVWNlTVdOalk1YkMwMDgvYlhRTWhRSUJDRUFnSkFLSVpralJxTGd0SkRpb2VBZkFmUWhFUUFEUmpDQklWVEh4bzQ4K01wczJiYkx1a2hXb0tsSEhUd2pFUlFEUmpDdGVTVnVidlZmejJtdXZyVjBWbHJUVE9BY0JDRVJGQU5HTUtsenBHNXZkUVV1Q2cvVGpqWWNRaUkwQW9obGJ4QkszTjd1RGRtSml3aXhac2lSeGozR3ZFUUdkMjlYTWc3NW0vNUhLUHF0L3F0US9OQ3VoRndVQ1BnZ2dtajRvMDBadUFzODg4NHc1ZVBDZ2ZSN1J6STB0MkFjbGZLNUlBSFdrNkpwcnJySFh3RW5vc3VLb1ovVTdDYUYrNzk3WDU3T2lxUGV5UlQrZlBIblMvbXJ4NHNYMnErcm83dTZ1ZmE4MmxXSEtKZEc0NjY2NzdIdUliYkJkSjFqREVNMWdRMU5OdzRhR2hzeFRUejJGYUFZV2ZvbU5FeXVKbXhNNDkzdjk3TkllNnFpUWRrTHJkOXJjcFgrRXNnS3A1N0xDV1BSc2dnVFppYTc3WGppZHJjcHpyQmtOL2Z6dXUrK2FoeDkrMkk1bVphTnNrNkRxZlFvRUdoRkFOT2tYUVJISUptN1hIMTRsT2FBVVE4Q0pocjVldkhpeE52MlpGY1A2N3pWQ1U1R1l1RkdabnBHb1pLZEZuZUE0c1NyRzR2SnJjVlBBK3FxK0o1SFZTM3gwYmxndmlTb2owdkpqRVVzTGlHWXNrYXFJbldmUG5qVTMzbmlqOWZiMTExODMyN2R2cjRqbnMzUFRUVzg2RVhUVG9XNkVsWjMrZEMxSUNMTnJnZnJlamZheTR1aWVtWjFsY1g5S0FxcnI2alJTRmx1bGROUkxSNkVvMVNhQWFGWTcva0Y2cjdVby9mRi83cm5ueklzdnZoaWtqVDZOMGg5dy9lR1dFTHFwVVltaGZzNFdyZWM1b1hOVHBVNFEzVm9oSTZiMklpZk9Fays5dEc0cWZocDlJcUR0Y1V6cGFVUXpwV2dtNGt0UFQ0OFpIeCt2bEdoS0RQVkhPU3VNMmZVNGhWYWpuS3o0dVNsU3JsRHowL0hkNkZQcm9HN0tXbjExeFlvVnByZTMxNDhSdE5KeEFvaG14ME9BQWZVRUhuLzhjZlBlZSsvWmRUTmRFWlpTa1RpZU9YT210bjZta1l6K0dLdTRhVk9ORHQxbUdmZVZFV0k0dlVBeDA3U3RScC9hRGJ4dzRVSXpPVGxwKzZ1V0V4RFFjR0pWaGlXSVpobFVxZk9LQ1BUMTlkay9TUGZlZTYvNTl0dHZyNml1VG4zWVRhTktJRFZpZEp0TW5EaEtET3VGc2VoZHBKM3l2VXJ0S3E0U1RQMlQ5L0hISDlkYzM3eDVzM25vb1lmTWhnMGJ6UHo1ODZ1RUpIbGZFYzNrUXh5Zmc4ZU9IVFByMXEyemh1c1Awb0lGQzRKMlFxTU5uU25OQ3FUTFp1UkdqUkpJalVTcXZMa202Q0FXWUp3RVZIM2gxS2xUWm5SMDFOYW9lR3Y5VTdHLy9mYmI3YWlVRWpjQlJEUHUrQ1ZwdlVhWkdtMnFhSG8ybEROemJtZXExclFraWhwQjZvK2twdXUwM3NqSU1jbnUyTFpUZi83NXAxMmYxc2p6dGRkZXEzMWUwN1lqSXlOdDE4Y0h3aUtBYUlZVkQ2d3h4azVscmwyNzFyTG8xRmxOQ2FRN3N5YzdsS1ZvNDhhTmRoVGhkbEM2bmFsc3hLSGJOaUp3NmRJbDg4MDMzOWdFQ2k2aHd2RHdNTEFpSjRCb1JoN0FGTTMvK2VlZnphMjMzbXBkVTRhZy92NytVdDEweHpjME9uQnJqeEpOSGVIUThRSTN4UnJLaUxkVUdGUU9BUWcwSllCbzBrR0NKTEI4K1hKejRzUUp1eDVVeG4vblkyTmpWaUNkU0dybnFrVFJyVHU2NHh4QndzRW9DRUNnWXdRUXpZNmhwK0ZtQkRROUswSGJzbVdMT1h6NDhCWEQwbWhTUXFtakFucGxSVklDeVJUckZTT21BZ2hVZ2dDaVdZa3d4K2ZrenAwN3pmNzkrODNTcFV2TjZkT25aK1ZBdlZDNlJOeWFjbVdxZFZaSStSQUVLazhBMGF4OEZ3Z1RnQVJUd3FrdCtuLzk5VmR1SSt1RlVzbTJuVWh5RGpJM1JoNkVBQVJtSUlCbzBqV0NKS0EwZWtwUk5tL2VQS09OUWEzT3QybW5xM1lwNmxvcWpTZ2xsTzVLcWlBZHhDZ0lRQ0JLQW9obWxHRkwzK2lqUjQvYUl4NHEvL3p6ajVrN2QyNURwNTFRS3JtQXU4cEpYeWtRZ0FBRXlpQ0FhSlpCbFRxdm1FRDJyR1o5Z2dNbEZIQTNUeWlwZ0hiWVNpakp6M3JGMktrQUFoQm9RUURScElzRVMwQlRzdWZPbmJQM2FqNzIyR08xNlZmdGZIWFhNN0ZPR1d6NE1Bd0NTUkpBTkpNTWF4cE8zWG5ubmVhSEgzNm9aZUxSc1JDdFU3THpOWTM0NGdVRVlpU0FhTVlZdFlSdDF1NVh2ZmJzMldQUFUrcjdSeDk5MUh6d3dRY0plNDFyRUlCQUxBUVF6VmdpbGJDZEVrYWxyWk5RS25XZGl0WW50WGFwdFUxZHIzVGt5SkdFQ2VBYUJDQVFDd0ZFTTVaSUpXYW5oTklsc3RaeGtmUG56OXVwVjIzcWNldVVMaXVRWEhkWGJTV0dBWGNnQUlISUNDQ2FrUVVzWm5NMWFsUlNkTzE4bFZDcUtQbUEyLzFhNzFzS2wxSEhIQzlzaHdBRS9rc0EwYVJYbEVZZ201MUhncW1mVmJUN1ZVS3BrV1d6M2ErSERoMHkyN1p0czUrSjRUTHEwa0JTTVFRZ0VBd0JSRE9ZVUtSaGlMdVlXWnQ0SkpUWjBteFUyY2o3WThlT21YWHIxdG0zbUo1Tm8zL2dCUVJpSjRCb3hoN0JBT3pYaGgxM2U0ZzI5R1NMdTVPeTFhaXlrUnZaQkFlSVpnQ0J4Z1FJUU1BZ21uU0N0Z25NTk8yYXJlaUpKNTZvcGJWcnU0SC9meUFybXIvKytxdTU2YWFiWmxzVm40TUFCQ0JRQ0FGRXN4Q002VmVpRWFUdW84eHU0cW4zV29uU05hSXNLcVdkanFBTURnN2FadlIxWUdBZ2ZkQjRDQUVJQkUwQTBRdzZQSjAxenQwY29xblgrbWxYWjVtYmZ0WEducUl2Y2o1eDRvUlp2bnk1YldwNGVOaHVIcUpBQUFJUTZDUUJSTE9UOUFOc1c2Tkp0ejdwZHJzMk1yT0k2ZGRXN2lPYXJRanhQZ1FnNEpzQW91bWJlSUR0NVJYS29xZGZXNkhJcm1reVBkdUtGdTlEQUFJK0NDQ2FQaWdIMklhYmV0VWFaYk1ScGFaZk5TMmF6ZFRqeXgzWnBnUUhLb2ltTCtxMEF3RUlOQ09BYUZhb2Y3ak5QQWNPSEpoeGpWSTQzTlZiMnRSVDlEcGxPN2daYWJaRGkyY2hBQUVmQkJCTkg1UTczSVp5dkdyVVZwOXNvTjRzZDZGektCdHV0RnQyNzk2OTFzd25uM3pTdlBYV1d4MG1TZk1RZ0VEVkNTQ2FpZllBZDJ1SXUxNXJKamM3T2YzYUNuMzJ5TW5LbFN2TmwxOSsyZW9qdkE4QkNFQ2dWQUtJWnFsNC9WZXVVYVdtWDExQzlKa3MwTzVYalNoRHZ0QTV1NmJaMjl0clJrWkcvQU9sUlFoQUFBSVpBb2htQXQxQm8wb25scTAyOWJqcnQzUmZaZWdsSzVwTGx5NDFwMCtmRHQxazdJTUFCQkluZ0doR0hHQ3RVYnIxeW1adUtGRzZ4RExrVVdVais3TWJnZlErK1djajdxeVlEb0ZFQ0NDYUVRWXl6eFJzeUd1VmVaRnYzcnpaakk2TzFoNG4vMnhlY2p3SEFRaVVSUURSTEl0c3dmVnEydlhnd1lOMkYreE1LZTNVcEhiQXV2eXZCWnZndmJxdXJxNXBiVExTOUI0Q0dvUUFCT29JSUpxQmQ0bTh1MkMxc1VjSkFKcGQ2aHk0cTlQTXkxNUFyVGQyN05oaFhuNzU1Wmhjd0ZZSVFDQkJBb2htb0VITnMxNlp3aFJzSS96MWE1bDY1dlBQUHpmMzMzOS9vTkhDTEFoQW9Db0VFTTNBSXExemxUcWYyT3pJaUhMQWFsU3BLN2hTS24vLy9iZDU0WVVYekp0dnZta3VYcnhZYzYyL3Y5OE1EUTJsNUNxK1FBQUNrUkpBTkFNSW5OWXIzZWFlWnV1VjJnVXJzZXhrYXJ1eWNCMDVjc1NNajQrYi9mdjNUMnRDMDgwVEV4TmxOVXU5RUlBQUJOb2lnR2kyaGF2NGg3V3g1L25ubnpkLy9QRkh3OHFWQjFaSkNMUzVKNVgxeXF5ajhsdWp5TU9IRDV2ZmZ2dnRQNEw1eGh0dm1BMGJOaFFQbmhvaEFBRUl6SUlBb2prTGFFVjhSTk93MnR3eTA4aFNZdWtTRWFRb2xwT1RrellYN3M2ZE84M1pzMmVuSVowN2Q2NTU4TUVIemI1OSs4ek5OOTljQkc3cWdBQUVJRkFJQVVTekVJenRWYUtSbzZaakd4VnQ3cEZZNnBWaWVmLzk5ODNiYjc4OVkvSjRpYVhXTUpVMmp3SUJDRUFnTkFLSXBzZUlhR1MxYWRPbWh2ZFhLbHZQcmwyN3pNYU5HejFhNUtjcEpTVjQ1WlZYekt1dnZqcGpnM2ZjY1lmUnJTYnIxNjgzVjE5OXRSL0RhQVVDRUlCQW13UVF6VGFCemZaeGJlRFJydGo2b21RRVNyQ2UydVllVFQrUGpZMlpWcmVzNkorRjdkdTNHOTFpY3NNTk44d1dMNStEQUFRZzRJVUFvdWtCYzZQcFdFM0RTaXhUT2piU2psQnErbFd2aFFzWGVvZ0FUVUFBQWhBb2hnQ2lXUXpIR1d0cEpKakszcU5kczdFWEhaVTVmdnk0SFUwMkcxRnFJOU9XTFZ2TTZ0V3JUVTlQVCt4dVl6OEVJRkJoQW9obWljSFhTRkk3WkYzUmpsaE4wOGE4eVVkSkY1eFFhbzEycHFJRURQcUhRU1BwRkhmL2x0aHRxQm9DRUFpWUFLSlpVbkEwOHRLbW4yejU4TU1QbzV1T2xUQ2VQSG5TN25iVnE5bDluVXErSUpIVU9pVkNXVkxIb2xvSVFLQ2pCQkRORXZCTFdMcTd1NmNKVE9pQ0tadWRPT3JzcUVhVXpWTDVDWnZXWlNXUWVra3NZN2pZdW9Sd1V5VUVJRkFoQW9obUNjR1dnR2pucUN0S0RkZXBLVm1Kb1Y0U1FsMjE1YjdYVnpkeWJDV09UaUExZXRRdVh5ZVVpR1FKblljcUlRQ0JvQWtnbWdXSFovZnUzZWFsbDE2cTFTcVJrWWhxTFZNSDl6V2FVemFjYkpFWTZaVmRJM1MvTzNYcWxIMWVRcVdpMzE5MzNYVm16cHc1OW1lOXJ4Mm95cXFqaE9jdXc1QVR5M2JkMDFxa2JGNjBhSkc1NTU1N2JIdXBIWWRwbHduUFF3QUNFSEFFRU0yQys4S3FWYXZNRjE5OFVYQ3R4VmFuYVZVbnl1NnJoQkZ4TEpZenRVRUFBdWtSUURRTGptbGZYOStNeDBtZWZmWlpPNXBVYnRWV3hZblpKNTk4TXUxNVpjdTUvdnJyelMrLy9HS3JXTFpzbWMyaW82dzcvLzc3cjExWHJOK0VvOThoaUsySTh6NEVJQUNCMWdRUXpkYU0ybjVpZEhUVS9QampqL1p6U2cxSGdRQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURnZjhCUDQ2ZnRNNFFsaDRBQUFBQVNVVk9SSzVDWUlJPQ==',
            'status' => 'por_firmar'
        ]);

        //Inversion Test2
        Inversion::create([
            'invertido' => 5000,
            'tipo_interes' => 'compuesto',
            'fecha_consignacion' => $fecha->subDays(2)->format('Y-m-d'),
            'referente' => 'PAOLA SOTELO',
            'comprobante_consignacion' => '',
            'periodo_mes' => '2',
            'user_id' => 3,
            'firma_cliente' => 'ZGF0YTppbWFnZS9wbmc7YmFzZTY0LGlWQk9SdzBLR2dvQUFBQU5TVWhFVWdBQUFjMEFBQUNYQ0FZQUFBQjNKd0E0QUFBQUFYTlNSMElBcnM0YzZRQUFFeGhKUkVGVWVGN3RuVjJJbGNVZngyZHZ6U2hGZzZEVXRhQTNxQ3dsSk1XRUZsOHVLaTlXS0xCY2lEVzhLU1hKcm5iMXBrSkk3WlUxWXN1aWk5MkxXZ29GV1NpaE55Z3BDYU1pMndRdnFoWFVRaSs2MlQvZjRUK0haMDluejNuTytqeHpadWI1REJ6MjVUeG41dmY3L0liOTdyejlwbXRxYW1yS1VDQUFBUWhBQUFJUWFFbWdDOUZzeVlnSElBQUJDRUFBQXBZQW9rbEhnQUFFSUFBQkNPUWtnR2ptQk1WakVJQUFCQ0FBQVVTVFBnQUJDRUFBQWhESVNRRFJ6QW1LeHlBQUFRaEFBQUtJSm4wQUFoQ0FBQVFna0pNQW9wa1RGSTlCQUFJUWdBQUVFRTM2QUFRZ0FBRUlRQ0FuQVVRekp5Z2Vnd0FFSUFBQkNDQ2E5QUVJUUFBQ0VJQkFUZ0tJWms1UVBBWUJDRUFBQWhCQU5Pa0RFSUFBQkNBQWdad0VFTTJjb0hnTUFoQ0FBQVFnZ0dqU0J5QUFBUWhBQUFJNUNTQ2FPVUh4R0FRZ0FBRUlRQURScEE5QUFBSVFnQUFFY2hKQU5IT0M0akVJUUFBQ0VJQUFva2tmQ0lMQXVYUG56TXFWSzYwdFgzMzFsVm13WUVFUWRtRUVCQ0FBZ1N3QlJKUCtFQVNCUFh2Mm1NSEJRV3VMdmc0TURBUmhGMFpBQUFJUVFEVHBBOEVSZU9lZGQweGZYNSsxYTNoNDJHemR1alU0R3pFSUFoQ0FBQ05OK2tBUUJCRE5JTUtBRVJDQVFBc0NpQ1pkSkFnQ2lHWVFZY0FJQ0VBQTBhUVB4RUNBTmMwWW9vU05FSUFBSTAzNlFCQUV0bTNiWmc0ZE9tUnQ2ZS92TjBORFEwSFloUkVRZ0FBRXNnUVFUZnBERUFSNmVuck0rUGk0dFdYUm9rWG16Smt6UWRpRkVSQ0FBQVFRVGZwQWNBU3V1dW9xYy9ueVpXdlhuRGx6ektWTGw0S3pFWU1nQUFFSU1OS2tEM1Njd0dlZmZXYldybDA3elk1UFAvM1VQUERBQXgyM0RRTWdBQUVJTU5La0R3UkY0UGZmZnpmZDNkM1RiSnFZbURCTGxpd0p5azZNZ1FBRUlNQklrejdRY1FLSVpzZERnQUVRZ0VCT0FvaG1UbEE4Vmg0QlJMTTh0dFFNQVFnVVN3RFJMSlludGMyQ1FLTTF6YW1wcVZuVXhFY2dBQUVJbEVzQTBTeVhMN1huSUZBLzB0UmFwdFkwS1JDQUFBUkNJNEJvaGhhUkN0b3pPVGxwYnJubEZuUCsvSG5ydlhiTmF2Y3NCUUlRZ0VCb0JCRE4wQ0pTVVh0MDVFVFR0Q3E5dmIxbVpHU2tvaVJ3R3dJUUNKa0FvaGx5ZENwazIyMjMzV1orK3VrbjYvSDY5ZXZOMGFOSEsrUTlya0lBQXJFUVFEUmppVlRpZGk1YnRzeDgvLzMzMXN2NzdydlBmUDMxMTRsN2pIc1FnRUNNQkJETkdLT1dvTTJEZzROR041Mm9yRm16cGpaVm02Q3J1QVFCQ0VSTUFOR01PSGdwbVg3Z3dBR3pZOGNPNjlMZGQ5OXR2dnZ1dTVUY3d4Y0lRQ0FSQW9obUlvR00zWTNzSmRUeWhYT2FzVWNVK3lHUUpnRkVNODI0UnVkVmZZSURSRE82RUdJd0JDcEJBTkdzUkpqRGQxS2JnTFFaeUJWTnoycWFsZ0lCQ0VBZ0pBS0laa2pScUxBdEZ5NWNNUFBtemFzUjRHcXdDbmNHWElkQXdBUVF6WUNEVXpYVHVycTZhaTRQRHcrYnJWdTNWZzBCL2tJQUFvRVRRRFFERDFDVnpGUDZ2T1BIajF1WEJ3WUdqSTZoVUNBQUFRaUVSQURSRENrYUZiZmxrVWNlTVdOalk1YkMwMDgvYlhRTWhRSUJDRUFnSkFLSVpralJxTGd0SkRpb2VBZkFmUWhFUUFEUmpDQklWVEh4bzQ4K01wczJiYkx1a2hXb0tsSEhUd2pFUlFEUmpDdGVTVnVidlZmejJtdXZyVjBWbHJUVE9BY0JDRVJGQU5HTUtsenBHNXZkUVV1Q2cvVGpqWWNRaUkwQW9obGJ4QkszTjd1RGRtSml3aXhac2lSeGozR3ZFUUdkMjlYTWc3NW0vNUhLUHF0L3F0US9OQ3VoRndVQ1BnZ2dtajRvMDBadUFzODg4NHc1ZVBDZ2ZSN1J6STB0MkFjbGZLNUlBSFdrNkpwcnJySFh3RW5vc3VLb1ovVTdDYUYrNzk3WDU3T2lxUGV5UlQrZlBIblMvbXJ4NHNYMnErcm83dTZ1ZmE4MmxXSEtKZEc0NjY2NzdIdUliYkJkSjFqREVNMWdRMU5OdzRhR2hzeFRUejJGYUFZV2ZvbU5FeXVKbXhNNDkzdjk3TkllNnFpUWRrTHJkOXJjcFgrRXNnS3A1N0xDV1BSc2dnVFppYTc3WGppZHJjcHpyQmtOL2Z6dXUrK2FoeDkrMkk1bVphTnNrNkRxZlFvRUdoRkFOT2tYUVJISUptN1hIMTRsT2FBVVE4Q0pocjVldkhpeE52MlpGY1A2N3pWQ1U1R1l1RkdabnBHb1pLZEZuZUE0c1NyRzR2SnJjVlBBK3FxK0o1SFZTM3gwYmxndmlTb2owdkpqRVVzTGlHWXNrYXFJbldmUG5qVTMzbmlqOWZiMTExODMyN2R2cjRqbnMzUFRUVzg2RVhUVG9XNkVsWjMrZEMxSUNMTnJnZnJlamZheTR1aWVtWjFsY1g5S0FxcnI2alJTRmx1bGROUkxSNkVvMVNhQWFGWTcva0Y2cjdVby9mRi83cm5ueklzdnZoaWtqVDZOMGg5dy9lR1dFTHFwVVltaGZzNFdyZWM1b1hOVHBVNFEzVm9oSTZiMklpZk9Fays5dEc0cWZocDlJcUR0Y1V6cGFVUXpwV2dtNGt0UFQ0OFpIeCt2bEdoS0RQVkhPU3VNMmZVNGhWYWpuS3o0dVNsU3JsRHowL0hkNkZQcm9HN0tXbjExeFlvVnByZTMxNDhSdE5KeEFvaG14ME9BQWZVRUhuLzhjZlBlZSsvWmRUTmRFWlpTa1RpZU9YT210bjZta1l6K0dLdTRhVk9ORHQxbUdmZVZFV0k0dlVBeDA3U3RScC9hRGJ4dzRVSXpPVGxwKzZ1V0V4RFFjR0pWaGlXSVpobFVxZk9LQ1BUMTlkay9TUGZlZTYvNTl0dHZyNml1VG4zWVRhTktJRFZpZEp0TW5EaEtET3VGc2VoZHBKM3l2VXJ0S3E0U1RQMlQ5L0hISDlkYzM3eDVzM25vb1lmTWhnMGJ6UHo1ODZ1RUpIbGZFYzNrUXh5Zmc4ZU9IVFByMXEyemh1c1Awb0lGQzRKMlFxTU5uU25OQ3FUTFp1UkdqUkpJalVTcXZMa202Q0FXWUp3RVZIM2gxS2xUWm5SMDFOYW9lR3Y5VTdHLy9mYmI3YWlVRWpjQlJEUHUrQ1ZwdlVhWkdtMnFhSG8ybEROemJtZXExclFraWhwQjZvK2twdXUwM3NqSU1jbnUyTFpUZi83NXAxMmYxc2p6dGRkZXEzMWUwN1lqSXlOdDE4Y0h3aUtBYUlZVkQ2d3h4azVscmwyNzFyTG8xRmxOQ2FRN3N5YzdsS1ZvNDhhTmRoVGhkbEM2bmFsc3hLSGJOaUp3NmRJbDg4MDMzOWdFQ2k2aHd2RHdNTEFpSjRCb1JoN0FGTTMvK2VlZnphMjMzbXBkVTRhZy92NytVdDEweHpjME9uQnJqeEpOSGVIUThRSTN4UnJLaUxkVUdGUU9BUWcwSllCbzBrR0NKTEI4K1hKejRzUUp1eDVVeG4vblkyTmpWaUNkU0dybnFrVFJyVHU2NHh4QndzRW9DRUNnWXdRUXpZNmhwK0ZtQkRROUswSGJzbVdMT1h6NDhCWEQwbWhTUXFtakFucGxSVklDeVJUckZTT21BZ2hVZ2dDaVdZa3d4K2ZrenAwN3pmNzkrODNTcFV2TjZkT25aK1ZBdlZDNlJOeWFjbVdxZFZaSStSQUVLazhBMGF4OEZ3Z1RnQVJUd3FrdCtuLzk5VmR1SSt1RlVzbTJuVWh5RGpJM1JoNkVBQVJtSUlCbzBqV0NKS0EwZWtwUk5tL2VQS09OUWEzT3QybW5xM1lwNmxvcWpTZ2xsTzVLcWlBZHhDZ0lRQ0JLQW9obWxHRkwzK2lqUjQvYUl4NHEvL3p6ajVrN2QyNURwNTFRS3JtQXU4cEpYeWtRZ0FBRXlpQ0FhSlpCbFRxdm1FRDJyR1o5Z2dNbEZIQTNUeWlwZ0hiWVNpakp6M3JGMktrQUFoQm9RUURScElzRVMwQlRzdWZPbmJQM2FqNzIyR08xNlZmdGZIWFhNN0ZPR1d6NE1Bd0NTUkpBTkpNTWF4cE8zWG5ubmVhSEgzNm9aZUxSc1JDdFU3THpOWTM0NGdVRVlpU0FhTVlZdFlSdDF1NVh2ZmJzMldQUFUrcjdSeDk5MUh6d3dRY0plNDFyRUlCQUxBUVF6VmdpbGJDZEVrYWxyWk5RS25XZGl0WW50WGFwdFUxZHIzVGt5SkdFQ2VBYUJDQVFDd0ZFTTVaSUpXYW5oTklsc3RaeGtmUG56OXVwVjIzcWNldVVMaXVRWEhkWGJTV0dBWGNnQUlISUNDQ2FrUVVzWm5NMWFsUlNkTzE4bFZDcUtQbUEyLzFhNzFzS2wxSEhIQzlzaHdBRS9rc0EwYVJYbEVZZ201MUhncW1mVmJUN1ZVS3BrV1d6M2ErSERoMHkyN1p0czUrSjRUTHEwa0JTTVFRZ0VBd0JSRE9ZVUtSaGlMdVlXWnQ0SkpUWjBteFUyY2o3WThlT21YWHIxdG0zbUo1Tm8zL2dCUVJpSjRCb3hoN0JBT3pYaGgxM2U0ZzI5R1NMdTVPeTFhaXlrUnZaQkFlSVpnQ0J4Z1FJUU1BZ21uU0N0Z25NTk8yYXJlaUpKNTZvcGJWcnU0SC9meUFybXIvKytxdTU2YWFiWmxzVm40TUFCQ0JRQ0FGRXN4Q002VmVpRWFUdW84eHU0cW4zV29uU05hSXNLcVdkanFBTURnN2FadlIxWUdBZ2ZkQjRDQUVJQkUwQTBRdzZQSjAxenQwY29xblgrbWxYWjVtYmZ0WEducUl2Y2o1eDRvUlp2bnk1YldwNGVOaHVIcUpBQUFJUTZDUUJSTE9UOUFOc1c2Tkp0ejdwZHJzMk1yT0k2ZGRXN2lPYXJRanhQZ1FnNEpzQW91bWJlSUR0NVJYS29xZGZXNkhJcm1reVBkdUtGdTlEQUFJK0NDQ2FQaWdIMklhYmV0VWFaYk1ScGFaZk5TMmF6ZFRqeXgzWnBnUUhLb2ltTCtxMEF3RUlOQ09BYUZhb2Y3ak5QQWNPSEpoeGpWSTQzTlZiMnRSVDlEcGxPN2daYWJaRGkyY2hBQUVmQkJCTkg1UTczSVp5dkdyVVZwOXNvTjRzZDZGektCdHV0RnQyNzk2OTFzd25uM3pTdlBYV1d4MG1TZk1RZ0VEVkNTQ2FpZllBZDJ1SXUxNXJKamM3T2YzYUNuMzJ5TW5LbFN2TmwxOSsyZW9qdkE4QkNFQ2dWQUtJWnFsNC9WZXVVYVdtWDExQzlKa3MwTzVYalNoRHZ0QTV1NmJaMjl0clJrWkcvQU9sUlFoQUFBSVpBb2htQXQxQm8wb25scTAyOWJqcnQzUmZaZWdsSzVwTGx5NDFwMCtmRHQxazdJTUFCQkluZ0doR0hHQ3RVYnIxeW1adUtGRzZ4RExrVVdVais3TWJnZlErK1djajdxeVlEb0ZFQ0NDYUVRWXl6eFJzeUd1VmVaRnYzcnpaakk2TzFoNG4vMnhlY2p3SEFRaVVSUURSTEl0c3dmVnEydlhnd1lOMkYreE1LZTNVcEhiQXV2eXZCWnZndmJxdXJxNXBiVExTOUI0Q0dvUUFCT29JSUpxQmQ0bTh1MkMxc1VjSkFKcGQ2aHk0cTlQTXkxNUFyVGQyN05oaFhuNzU1Wmhjd0ZZSVFDQkJBb2htb0VITnMxNlp3aFJzSS96MWE1bDY1dlBQUHpmMzMzOS9vTkhDTEFoQW9Db0VFTTNBSXExemxUcWYyT3pJaUhMQWFsU3BLN2hTS24vLy9iZDU0WVVYekp0dnZta3VYcnhZYzYyL3Y5OE1EUTJsNUNxK1FBQUNrUkpBTkFNSW5OWXIzZWFlWnV1VjJnVXJzZXhrYXJ1eWNCMDVjc1NNajQrYi9mdjNUMnRDMDgwVEV4TmxOVXU5RUlBQUJOb2lnR2kyaGF2NGg3V3g1L25ubnpkLy9QRkh3OHFWQjFaSkNMUzVKNVgxeXF5ajhsdWp5TU9IRDV2ZmZ2dnRQNEw1eGh0dm1BMGJOaFFQbmhvaEFBRUl6SUlBb2prTGFFVjhSTk93MnR3eTA4aFNZdWtTRWFRb2xwT1RrellYN3M2ZE84M1pzMmVuSVowN2Q2NTU4TUVIemI1OSs4ek5OOTljQkc3cWdBQUVJRkFJQVVTekVJenRWYUtSbzZaakd4VnQ3cEZZNnBWaWVmLzk5ODNiYjc4OVkvSjRpYVhXTUpVMmp3SUJDRUFnTkFLSXBzZUlhR1MxYWRPbWh2ZFhLbHZQcmwyN3pNYU5HejFhNUtjcEpTVjQ1WlZYekt1dnZqcGpnM2ZjY1lmUnJTYnIxNjgzVjE5OXRSL0RhQVVDRUlCQW13UVF6VGFCemZaeGJlRFJydGo2b21RRVNyQ2UydVllVFQrUGpZMlpWcmVzNkorRjdkdTNHOTFpY3NNTk44d1dMNStEQUFRZzRJVUFvdWtCYzZQcFdFM0RTaXhUT2piU2psQnErbFd2aFFzWGVvZ0FUVUFBQWhBb2hnQ2lXUXpIR1d0cEpKakszcU5kczdFWEhaVTVmdnk0SFUwMkcxRnFJOU9XTFZ2TTZ0V3JUVTlQVCt4dVl6OEVJRkJoQW9obWljSFhTRkk3WkYzUmpsaE4wOGE4eVVkSkY1eFFhbzEycHFJRURQcUhRU1BwRkhmL2x0aHRxQm9DRUFpWUFLSlpVbkEwOHRLbW4yejU4TU1QbzV1T2xUQ2VQSG5TN25iVnE5bDluVXErSUpIVU9pVkNXVkxIb2xvSVFLQ2pCQkRORXZCTFdMcTd1NmNKVE9pQ0tadWRPT3JzcUVhVXpWTDVDWnZXWlNXUWVra3NZN2pZdW9Sd1V5VUVJRkFoQW9obUNjR1dnR2pucUN0S0RkZXBLVm1Kb1Y0U1FsMjE1YjdYVnpkeWJDV09UaUExZXRRdVh5ZVVpR1FKblljcUlRQ0JvQWtnbWdXSFovZnUzZWFsbDE2cTFTcVJrWWhxTFZNSDl6V2FVemFjYkpFWTZaVmRJM1MvTzNYcWxIMWVRcVdpMzE5MzNYVm16cHc1OW1lOXJ4Mm95cXFqaE9jdXc1QVR5M2JkMDFxa2JGNjBhSkc1NTU1N2JIdXBIWWRwbHduUFF3QUNFSEFFRU0yQys4S3FWYXZNRjE5OFVYQ3R4VmFuYVZVbnl1NnJoQkZ4TEpZenRVRUFBdWtSUURRTGptbGZYOStNeDBtZWZmWlpPNXBVYnRWV3hZblpKNTk4TXUxNVpjdTUvdnJyelMrLy9HS3JXTFpzbWMyaW82dzcvLzc3cjExWHJOK0VvOThoaUsySTh6NEVJQUNCMWdRUXpkYU0ybjVpZEhUVS9QampqL1p6U2cxSGdRQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURnZjhCUDQ2ZnRNNFFsaDRBQUFBQVNVVk9SSzVDWUlJPQ==',
            'status' => 'por_firmar'
        ]);

        //Inversion Test3
        Inversion::create([
            'invertido' => 28000,
            'tipo_interes' => 'lineal',
            'fecha_consignacion' => $fecha->subDays(1)->format('Y-m-d'),
            'referente' => 'ANGEL MENDOZA',
            'comprobante_consignacion' => '',
            'periodo_mes' => '1',
            'user_id' => 3,
            'firma_cliente' => 'ZGF0YTppbWFnZS9wbmc7YmFzZTY0LGlWQk9SdzBLR2dvQUFBQU5TVWhFVWdBQUFjMEFBQUNYQ0FZQUFBQjNKd0E0QUFBQUFYTlNSMElBcnM0YzZRQUFFeGhKUkVGVWVGN3RuVjJJbGNVZngyZHZ6U2hGZzZEVXRhQTNxQ3dsSk1XRUZsOHVLaTlXS0xCY2lEVzhLU1hKcm5iMXBrSkk3WlUxWXN1aWk5MkxXZ29GV1NpaE55Z3BDYU1pMndRdnFoWFVRaSs2MlQvZjRUK0haMDluejNuTytqeHpadWI1REJ6MjVUeG41dmY3L0liOTdyejlwbXRxYW1yS1VDQUFBUWhBQUFJUWFFbWdDOUZzeVlnSElBQUJDRUFBQXBZQW9rbEhnQUFFSUFBQkNPUWtnR2ptQk1WakVJQUFCQ0FBQVVTVFBnQUJDRUFBQWhESVNRRFJ6QW1LeHlBQUFRaEFBQUtJSm4wQUFoQ0FBQVFna0pNQW9wa1RGSTlCQUFJUWdBQUVFRTM2QUFRZ0FBRUlRQ0FuQVVRekp5Z2Vnd0FFSUFBQkNDQ2E5QUVJUUFBQ0VJQkFUZ0tJWms1UVBBWUJDRUFBQWhCQU5Pa0RFSUFBQkNBQWdad0VFTTJjb0hnTUFoQ0FBQVFnZ0dqU0J5QUFBUWhBQUFJNUNTQ2FPVUh4R0FRZ0FBRUlRQURScEE5QUFBSVFnQUFFY2hKQU5IT0M0akVJUUFBQ0VJQUFva2tmQ0lMQXVYUG56TXFWSzYwdFgzMzFsVm13WUVFUWRtRUVCQ0FBZ1N3QlJKUCtFQVNCUFh2Mm1NSEJRV3VMdmc0TURBUmhGMFpBQUFJUVFEVHBBOEVSZU9lZGQweGZYNSsxYTNoNDJHemR1alU0R3pFSUFoQ0FBQ05OK2tBUUJCRE5JTUtBRVJDQVFBc0NpQ1pkSkFnQ2lHWVFZY0FJQ0VBQTBhUVB4RUNBTmMwWW9vU05FSUFBSTAzNlFCQUV0bTNiWmc0ZE9tUnQ2ZS92TjBORFEwSFloUkVRZ0FBRXNnUVFUZnBERUFSNmVuck0rUGk0dFdYUm9rWG16Smt6UWRpRkVSQ0FBQVFRVGZwQWNBU3V1dW9xYy9ueVpXdlhuRGx6ektWTGw0S3pFWU1nQUFFSU1OS2tEM1Njd0dlZmZXYldybDA3elk1UFAvM1VQUERBQXgyM0RRTWdBQUVJTU5La0R3UkY0UGZmZnpmZDNkM1RiSnFZbURCTGxpd0p5azZNZ1FBRUlNQklrejdRY1FLSVpzZERnQUVRZ0VCT0FvaG1UbEE4Vmg0QlJMTTh0dFFNQVFnVVN3RFJMSlludGMyQ1FLTTF6YW1wcVZuVXhFY2dBQUVJbEVzQTBTeVhMN1huSUZBLzB0UmFwdFkwS1JDQUFBUkNJNEJvaGhhUkN0b3pPVGxwYnJubEZuUCsvSG5ydlhiTmF2Y3NCUUlRZ0VCb0JCRE4wQ0pTVVh0MDVFVFR0Q3E5dmIxbVpHU2tvaVJ3R3dJUUNKa0FvaGx5ZENwazIyMjMzV1orK3VrbjYvSDY5ZXZOMGFOSEsrUTlya0lBQXJFUVFEUmppVlRpZGk1YnRzeDgvLzMzMXN2NzdydlBmUDMxMTRsN2pIc1FnRUNNQkJETkdLT1dvTTJEZzROR041Mm9yRm16cGpaVm02Q3J1QVFCQ0VSTUFOR01PSGdwbVg3Z3dBR3pZOGNPNjlMZGQ5OXR2dnZ1dTVUY3d4Y0lRQ0FSQW9obUlvR00zWTNzSmRUeWhYT2FzVWNVK3lHUUpnRkVNODI0UnVkVmZZSURSRE82RUdJd0JDcEJBTkdzUkpqRGQxS2JnTFFaeUJWTnoycWFsZ0lCQ0VBZ0pBS0laa2pScUxBdEZ5NWNNUFBtemFzUjRHcXdDbmNHWElkQXdBUVF6WUNEVXpYVHVycTZhaTRQRHcrYnJWdTNWZzBCL2tJQUFvRVRRRFFERDFDVnpGUDZ2T1BIajF1WEJ3WUdqSTZoVUNBQUFRaUVSQURSRENrYUZiZmxrVWNlTVdOalk1YkMwMDgvYlhRTWhRSUJDRUFnSkFLSVpralJxTGd0SkRpb2VBZkFmUWhFUUFEUmpDQklWVEh4bzQ4K01wczJiYkx1a2hXb0tsSEhUd2pFUlFEUmpDdGVTVnVidlZmejJtdXZyVjBWbHJUVE9BY0JDRVJGQU5HTUtsenBHNXZkUVV1Q2cvVGpqWWNRaUkwQW9obGJ4QkszTjd1RGRtSml3aXhac2lSeGozR3ZFUUdkMjlYTWc3NW0vNUhLUHF0L3F0US9OQ3VoRndVQ1BnZ2dtajRvMDBadUFzODg4NHc1ZVBDZ2ZSN1J6STB0MkFjbGZLNUlBSFdrNkpwcnJySFh3RW5vc3VLb1ovVTdDYUYrNzk3WDU3T2lxUGV5UlQrZlBIblMvbXJ4NHNYMnErcm83dTZ1ZmE4MmxXSEtKZEc0NjY2NzdIdUliYkJkSjFqREVNMWdRMU5OdzRhR2hzeFRUejJGYUFZV2ZvbU5FeXVKbXhNNDkzdjk3TkllNnFpUWRrTHJkOXJjcFgrRXNnS3A1N0xDV1BSc2dnVFppYTc3WGppZHJjcHpyQmtOL2Z6dXUrK2FoeDkrMkk1bVphTnNrNkRxZlFvRUdoRkFOT2tYUVJISUptN1hIMTRsT2FBVVE4Q0pocjVldkhpeE52MlpGY1A2N3pWQ1U1R1l1RkdabnBHb1pLZEZuZUE0c1NyRzR2SnJjVlBBK3FxK0o1SFZTM3gwYmxndmlTb2owdkpqRVVzTGlHWXNrYXFJbldmUG5qVTMzbmlqOWZiMTExODMyN2R2cjRqbnMzUFRUVzg2RVhUVG9XNkVsWjMrZEMxSUNMTnJnZnJlamZheTR1aWVtWjFsY1g5S0FxcnI2alJTRmx1bGROUkxSNkVvMVNhQWFGWTcva0Y2cjdVby9mRi83cm5ueklzdnZoaWtqVDZOMGg5dy9lR1dFTHFwVVltaGZzNFdyZWM1b1hOVHBVNFEzVm9oSTZiMklpZk9Fays5dEc0cWZocDlJcUR0Y1V6cGFVUXpwV2dtNGt0UFQ0OFpIeCt2bEdoS0RQVkhPU3VNMmZVNGhWYWpuS3o0dVNsU3JsRHowL0hkNkZQcm9HN0tXbjExeFlvVnByZTMxNDhSdE5KeEFvaG14ME9BQWZVRUhuLzhjZlBlZSsvWmRUTmRFWlpTa1RpZU9YT210bjZta1l6K0dLdTRhVk9ORHQxbUdmZVZFV0k0dlVBeDA3U3RScC9hRGJ4dzRVSXpPVGxwKzZ1V0V4RFFjR0pWaGlXSVpobFVxZk9LQ1BUMTlkay9TUGZlZTYvNTl0dHZyNml1VG4zWVRhTktJRFZpZEp0TW5EaEtET3VGc2VoZHBKM3l2VXJ0S3E0U1RQMlQ5L0hISDlkYzM3eDVzM25vb1lmTWhnMGJ6UHo1ODZ1RUpIbGZFYzNrUXh5Zmc4ZU9IVFByMXEyemh1c1Awb0lGQzRKMlFxTU5uU25OQ3FUTFp1UkdqUkpJalVTcXZMa202Q0FXWUp3RVZIM2gxS2xUWm5SMDFOYW9lR3Y5VTdHLy9mYmI3YWlVRWpjQlJEUHUrQ1ZwdlVhWkdtMnFhSG8ybEROemJtZXExclFraWhwQjZvK2twdXUwM3NqSU1jbnUyTFpUZi83NXAxMmYxc2p6dGRkZXEzMWUwN1lqSXlOdDE4Y0h3aUtBYUlZVkQ2d3h4azVscmwyNzFyTG8xRmxOQ2FRN3N5YzdsS1ZvNDhhTmRoVGhkbEM2bmFsc3hLSGJOaUp3NmRJbDg4MDMzOWdFQ2k2aHd2RHdNTEFpSjRCb1JoN0FGTTMvK2VlZnphMjMzbXBkVTRhZy92NytVdDEweHpjME9uQnJqeEpOSGVIUThRSTN4UnJLaUxkVUdGUU9BUWcwSllCbzBrR0NKTEI4K1hKejRzUUp1eDVVeG4vblkyTmpWaUNkU0dybnFrVFJyVHU2NHh4QndzRW9DRUNnWXdRUXpZNmhwK0ZtQkRROUswSGJzbVdMT1h6NDhCWEQwbWhTUXFtakFucGxSVklDeVJUckZTT21BZ2hVZ2dDaVdZa3d4K2ZrenAwN3pmNzkrODNTcFV2TjZkT25aK1ZBdlZDNlJOeWFjbVdxZFZaSStSQUVLazhBMGF4OEZ3Z1RnQVJUd3FrdCtuLzk5VmR1SSt1RlVzbTJuVWh5RGpJM1JoNkVBQVJtSUlCbzBqV0NKS0EwZWtwUk5tL2VQS09OUWEzT3QybW5xM1lwNmxvcWpTZ2xsTzVLcWlBZHhDZ0lRQ0JLQW9obWxHRkwzK2lqUjQvYUl4NHEvL3p6ajVrN2QyNURwNTFRS3JtQXU4cEpYeWtRZ0FBRXlpQ0FhSlpCbFRxdm1FRDJyR1o5Z2dNbEZIQTNUeWlwZ0hiWVNpakp6M3JGMktrQUFoQm9RUURScElzRVMwQlRzdWZPbmJQM2FqNzIyR08xNlZmdGZIWFhNN0ZPR1d6NE1Bd0NTUkpBTkpNTWF4cE8zWG5ubmVhSEgzNm9aZUxSc1JDdFU3THpOWTM0NGdVRVlpU0FhTVlZdFlSdDF1NVh2ZmJzMldQUFUrcjdSeDk5MUh6d3dRY0plNDFyRUlCQUxBUVF6VmdpbGJDZEVrYWxyWk5RS25XZGl0WW50WGFwdFUxZHIzVGt5SkdFQ2VBYUJDQVFDd0ZFTTVaSUpXYW5oTklsc3RaeGtmUG56OXVwVjIzcWNldVVMaXVRWEhkWGJTV0dBWGNnQUlISUNDQ2FrUVVzWm5NMWFsUlNkTzE4bFZDcUtQbUEyLzFhNzFzS2wxSEhIQzlzaHdBRS9rc0EwYVJYbEVZZ201MUhncW1mVmJUN1ZVS3BrV1d6M2ErSERoMHkyN1p0czUrSjRUTHEwa0JTTVFRZ0VBd0JSRE9ZVUtSaGlMdVlXWnQ0SkpUWjBteFUyY2o3WThlT21YWHIxdG0zbUo1Tm8zL2dCUVJpSjRCb3hoN0JBT3pYaGgxM2U0ZzI5R1NMdTVPeTFhaXlrUnZaQkFlSVpnQ0J4Z1FJUU1BZ21uU0N0Z25NTk8yYXJlaUpKNTZvcGJWcnU0SC9meUFybXIvKytxdTU2YWFiWmxzVm40TUFCQ0JRQ0FGRXN4Q002VmVpRWFUdW84eHU0cW4zV29uU05hSXNLcVdkanFBTURnN2FadlIxWUdBZ2ZkQjRDQUVJQkUwQTBRdzZQSjAxenQwY29xblgrbWxYWjVtYmZ0WEducUl2Y2o1eDRvUlp2bnk1YldwNGVOaHVIcUpBQUFJUTZDUUJSTE9UOUFOc1c2Tkp0ejdwZHJzMk1yT0k2ZGRXN2lPYXJRanhQZ1FnNEpzQW91bWJlSUR0NVJYS29xZGZXNkhJcm1reVBkdUtGdTlEQUFJK0NDQ2FQaWdIMklhYmV0VWFaYk1ScGFaZk5TMmF6ZFRqeXgzWnBnUUhLb2ltTCtxMEF3RUlOQ09BYUZhb2Y3ak5QQWNPSEpoeGpWSTQzTlZiMnRSVDlEcGxPN2daYWJaRGkyY2hBQUVmQkJCTkg1UTczSVp5dkdyVVZwOXNvTjRzZDZGektCdHV0RnQyNzk2OTFzd25uM3pTdlBYV1d4MG1TZk1RZ0VEVkNTQ2FpZllBZDJ1SXUxNXJKamM3T2YzYUNuMzJ5TW5LbFN2TmwxOSsyZW9qdkE4QkNFQ2dWQUtJWnFsNC9WZXVVYVdtWDExQzlKa3MwTzVYalNoRHZ0QTV1NmJaMjl0clJrWkcvQU9sUlFoQUFBSVpBb2htQXQxQm8wb25scTAyOWJqcnQzUmZaZWdsSzVwTGx5NDFwMCtmRHQxazdJTUFCQkluZ0doR0hHQ3RVYnIxeW1adUtGRzZ4RExrVVdVais3TWJnZlErK1djajdxeVlEb0ZFQ0NDYUVRWXl6eFJzeUd1VmVaRnYzcnpaakk2TzFoNG4vMnhlY2p3SEFRaVVSUURSTEl0c3dmVnEydlhnd1lOMkYreE1LZTNVcEhiQXV2eXZCWnZndmJxdXJxNXBiVExTOUI0Q0dvUUFCT29JSUpxQmQ0bTh1MkMxc1VjSkFKcGQ2aHk0cTlQTXkxNUFyVGQyN05oaFhuNzU1Wmhjd0ZZSVFDQkJBb2htb0VITnMxNlp3aFJzSS96MWE1bDY1dlBQUHpmMzMzOS9vTkhDTEFoQW9Db0VFTTNBSXExemxUcWYyT3pJaUhMQWFsU3BLN2hTS24vLy9iZDU0WVVYekp0dnZta3VYcnhZYzYyL3Y5OE1EUTJsNUNxK1FBQUNrUkpBTkFNSW5OWXIzZWFlWnV1VjJnVXJzZXhrYXJ1eWNCMDVjc1NNajQrYi9mdjNUMnRDMDgwVEV4TmxOVXU5RUlBQUJOb2lnR2kyaGF2NGg3V3g1L25ubnpkLy9QRkh3OHFWQjFaSkNMUzVKNVgxeXF5ajhsdWp5TU9IRDV2ZmZ2dnRQNEw1eGh0dm1BMGJOaFFQbmhvaEFBRUl6SUlBb2prTGFFVjhSTk93MnR3eTA4aFNZdWtTRWFRb2xwT1RrellYN3M2ZE84M1pzMmVuSVowN2Q2NTU4TUVIemI1OSs4ek5OOTljQkc3cWdBQUVJRkFJQVVTekVJenRWYUtSbzZaakd4VnQ3cEZZNnBWaWVmLzk5ODNiYjc4OVkvSjRpYVhXTUpVMmp3SUJDRUFnTkFLSXBzZUlhR1MxYWRPbWh2ZFhLbHZQcmwyN3pNYU5HejFhNUtjcEpTVjQ1WlZYekt1dnZqcGpnM2ZjY1lmUnJTYnIxNjgzVjE5OXRSL0RhQVVDRUlCQW13UVF6VGFCemZaeGJlRFJydGo2b21RRVNyQ2UydVllVFQrUGpZMlpWcmVzNkorRjdkdTNHOTFpY3NNTk44d1dMNStEQUFRZzRJVUFvdWtCYzZQcFdFM0RTaXhUT2piU2psQnErbFd2aFFzWGVvZ0FUVUFBQWhBb2hnQ2lXUXpIR1d0cEpKakszcU5kczdFWEhaVTVmdnk0SFUwMkcxRnFJOU9XTFZ2TTZ0V3JUVTlQVCt4dVl6OEVJRkJoQW9obWljSFhTRkk3WkYzUmpsaE4wOGE4eVVkSkY1eFFhbzEycHFJRURQcUhRU1BwRkhmL2x0aHRxQm9DRUFpWUFLSlpVbkEwOHRLbW4yejU4TU1QbzV1T2xUQ2VQSG5TN25iVnE5bDluVXErSUpIVU9pVkNXVkxIb2xvSVFLQ2pCQkRORXZCTFdMcTd1NmNKVE9pQ0tadWRPT3JzcUVhVXpWTDVDWnZXWlNXUWVra3NZN2pZdW9Sd1V5VUVJRkFoQW9obUNjR1dnR2pucUN0S0RkZXBLVm1Kb1Y0U1FsMjE1YjdYVnpkeWJDV09UaUExZXRRdVh5ZVVpR1FKblljcUlRQ0JvQWtnbWdXSFovZnUzZWFsbDE2cTFTcVJrWWhxTFZNSDl6V2FVemFjYkpFWTZaVmRJM1MvTzNYcWxIMWVRcVdpMzE5MzNYVm16cHc1OW1lOXJ4Mm95cXFqaE9jdXc1QVR5M2JkMDFxa2JGNjBhSkc1NTU1N2JIdXBIWWRwbHduUFF3QUNFSEFFRU0yQys4S3FWYXZNRjE5OFVYQ3R4VmFuYVZVbnl1NnJoQkZ4TEpZenRVRUFBdWtSUURRTGptbGZYOStNeDBtZWZmWlpPNXBVYnRWV3hZblpKNTk4TXUxNVpjdTUvdnJyelMrLy9HS3JXTFpzbWMyaW82dzcvLzc3cjExWHJOK0VvOThoaUsySTh6NEVJQUNCMWdRUXpkYU0ybjVpZEhUVS9QampqL1p6U2cxSGdRQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURBVVRUQTJTYWdBQUVJQUNCTkFnZ21tbkVFUzhnQUFFSVFNQURnZjhCUDQ2ZnRNNFFsaDRBQUFBQVNVVk9SSzVDWUlJPQ==',
            'status' => 'por_firmar'
        ]);
    }
}