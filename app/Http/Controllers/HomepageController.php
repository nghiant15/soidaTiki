<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Log;

use PhpParser\Node\Expr\FuncCall;
use View;
use Illuminate\Support\Facades\Cache;
class HomepageController extends Controller
{

   
    public function redireHomePage(Request $request, $slug =null )
    {
        return redirect('/');
    }
    

    public function CheckUrl ($slug) 
    {

     
        $checkacssSlugUrl ="https://api-soida.applamdep.com/api/check-access-slug";
        $client = new Client();

        $res = $client->request('post', 'https://api-soida.applamdep.com/api/check-access-slug', [
            'json' => [
                'slug'=> $slug
              ]
        ]);
        
     
        if($res->getStatusCode() ==200)
        {
            $checkresult = $res->getBody()->getContents();
            $checkresult = json_decode($checkresult);
            if($checkresult->is_success)
            {
                $result  = $checkresult->data;

               
                if($result == null)
                {
                    return  false;
                }
                else 
                {
                    $this->setdataInfoCompany ($checkresult->data->company_data);
;                    
                }
            
                return $result->isAccess;
            }
             return  false;
           
         }
        return false;

    }

    public function start (Request $request, $slug =null) 
    { 
        return view("start", compact("slug"));
    }


public function getDataInfo (Request $request) 
{
    
    $dataInfo =  session('dataInfo', null);
    $params = [
    'query' => [
        "key"=> "webinfo",
        'company_id'=> $this->getCompanyId()
    ]
    ];
    $dataUpdate = [
        
    ];

    

    $url = API_BaseUrl."/".config_get_by_key;
    $client = new Client();
    $res = $client->request('get',$url ,$params);
    if($res->getStatusCode() ==200)
    { 
        $checkresult = $res->getBody()->getContents();
        $data = json_decode($checkresult);
        if($data->is_success)
        {
            $dataInfo = json_decode($data->data[0]->Value);
        
            Cache::put('webinfo', $dataInfo->value);
            return $data;
            
        }  
        
        return  [
            "is_success" =>false , 
            "data"=> null
        ];
    }
    else 
    {
        session(['webinfo' =>[]]);
    }
}


    public function getDataInfoAdmin (Request $request) 
    {
         $dataInfo = session('dataInfo_admin', null);
         $params = [
          'query' => [
              "key"=> "webinfo_admin",
              'company_id'=>"-1"
          ]
       ];
        $dataUpdate = [
           
        ];
    
        $url = API_BaseUrl."/".config_get_by_key;
        $client = new Client();
        $res = $client->request('get',$url ,$params);
       
        if($res->getStatusCode() ==200)
        { 
            $checkresult = $res->getBody()->getContents();
            $data = json_decode($checkresult);
            
          
            if($data->is_success)
            {
                
                $dataInfo = json_decode($data->data[0]->Value);
                
                Cache::put('webinfo_admin', $dataInfo->value);
                return $data;
                  
             }  
             
            return  [
                "is_success" =>false , 
                "data"=> null
             ];
        }
        else 
        {
            session(['webinfo_admin' =>[]]);
        }
    }

    public function getColorSystem (Request $request) 
    {
       
        $bannerSession =  session('dataColor', null);
        $companyId =  $this->getCompanyId();
        if( $companyId == null ||  $companyId ==  "")
        {
            
            session(['dataColor' =>[]]);
            return;
        }
        $dataUpdate = [  ];
        $url = API_BaseUrl."/".System_color_get."/".$this->getCompanyId();
        $client = new Client();
        $res = $client->request('get',$url , [
            'json' =>$dataUpdate
        ]);
        if($res->getStatusCode() ==200)
        { 
            $checkresult = $res->getBody()->getContents();
            $data = json_decode($checkresult);

            
            if($data->is_success)
            {
                session(['dataColor' =>$data]);
                Cache::put('dataColor', $data->data);
                return $data;
                  
             }  
            return  [
                "is_success" =>false , 
                "data"=> null
             ];
        }
        else 
        {
            session(['dataColor' =>[]]);
        }
    }


    public function getAllFooterPage ( )
    {
        $dataUpdate = [
            
            // "company_id"=>  $this->getCompanyId()
        ];
        
        $params = [
        'query' => [
            'company_id' => "-1",
           

        ]
     ];
        $url = "https://api.deal24h.vn"."/".Footer_getAll;
      $client = new Client();
      $res = $client->request('get', $url, $params);
         if($res->getStatusCode() ==200)
        {
            // return  ["is_success" =>false];

            $checkresult = $res->getBody()->getContents();
            $data = json_decode($checkresult);

           
            
             if($data->is_success)
           {
               
                Cache::put('allFooter', $data->data);
           
            
                  
           }
        
        }
        else 
        {
            return response()->json(['message' => 'Lấy lịch sử thất bại'], $res->getStatusCode() );
        }
       
    }
    public function index (Request $request, $slug =null) 
    {  
        
        $dataUpdate = [];
        
        $params = [
        'query' => [
            'company_id' => "-1"
             ]
        ];
        $url = "https://api-soida.applamdep.com/api/baner/getAllBannerWeb";
        $client = new Client();
        $res = $client->request('get', $url, $params);

        $dataGlobal =null;
        if($res->getStatusCode() ==200)
        {
            // return  ["is_success" =>false];

            $checkresult = $res->getBody()->getContents();
            $data = json_decode($checkresult);
            $dataGlobal = $data->data;

        }


        $this->getDataInfoAdmin($request);
        if (Cache::has('webinfo')) {

        }
        else 
        {
            $this->getDataInfo($request);

        }
         if (Cache::has('allFooter')) {
              
        }
        else 
        {   
            $this->getAllFooterPage();  
        }     
        $dataColorSesion =  session('dataColor', null);
        if($dataColorSesion)
        {
        }
        else 
        {
            $this->getColorSystem($request);
        }
        $dataUserSession =  session('dataCompany', null);


        
        $companyGlobalId = $this->getCompanyId();
        $dataUser =null;
        if($dataUserSession)
        {
           $dataUser =  $dataUserSession->data;
        //    dd($dataUser);
            $dataUser->token = $dataUserSession->token;
        
            // $dataUser = $this->getInfo($request);
         
            // $dataUser = $dataUser["data"]->data;
        }
        
        $isCheck  = true;
        if($slug == "" ||$slug ==null)
        {

        }
        else 
        {
            $isCheck = $this->CheckUrl($slug);
        }  
        if(!$isCheck)
        {
        return view("404.notfound");
       
        }
        $companyGlobalId = $this->getCompanyId();
        $agent = new Agent();
        return view("campaign.bannerCampaign", compact("slug","dataGlobal","dataUser","companyGlobalId","agent"));
       
    }


    


    public function skinIndex (Request $request, $slug =null) 
    {
        

       

        $isCheck  = true;

        if($slug == "" ||$slug ==null)
        {
            $this->setdataInfoCompany(null);            
        }
        else 
        {
            $isCheck = $this->CheckUrl($slug);
        } 

        if($slug == "bibabo")

        {
            $userName = $request['name'];

            $dataRequestInput =[
                'username'=>  $userName,
                'password'=> $userName,
                'phoneNumber'=> $userName,
                'slug' => $slug,
                'company_id'=> "63fdd4abf2e4d61bd539962b",
                'historyId' => $this->getHistoryId()
            ];
            $this->loginUser($dataRequestInput);
           
        }


      
        if(!$isCheck)
        {
        return view("notfound");
       
        }

        $agent = new Agent();
        return view("welcome", compact("slug","agent"));
       

    }

    public function result (Request $request, $slug =null) 
    {
  

        if($slug =="soida")
        {
            $slug = null;
        }
        if($slug == null )
        {
              
            
        }

        $agent = new Agent();
        return view("result", compact("slug", "agent"));
    }

    public function recomendProduct (Request $request, $slug =null) 
    {
        // dd($this->getCompanyId());
        $companyId = $this->getCompanyId();
        $agent = new Agent();
        return view("recomendProduct", compact("slug", "companyId", "agent"));
    }

    

    public function profile (Request $request, $slug =null) 
    {
        $agent = new Agent();
        return view("profile", compact("slug","agent"));
    }

    public function history (Request $request , $slug =null, $id =null) 
    {
        $agent = new Agent();
        if($id ==null)
        {
            return view("history", compact("slug"));
        }
        return view("detailHistory",compact("id","agent"));
        
    }

    public function historyDetailPage (Request $request , $id =null) 
    {
        $agent = new Agent();
        if($id ==null)
        {
          return ;
        }
        $slug = "";
        $checkacssSlugUrl ="https://api-soida.applamdep.com/api/get-detail-history-skin";
        $client = new Client();
        $res = $client->request('post', 'https://api-soida.applamdep.com/api/get-detail-history-skin', [
            'json' => [
                 'id'=> $id
              ]
        ]);
        
     
        if($res->getStatusCode() ==200)
        {
            $checkresult = $res->getBody()->getContents();

         
            $checkresult = json_decode($checkresult);

           
            if($checkresult->is_success)
            {
                $result  = $checkresult->data;

            
              
               
                return view("historyPageDetail",compact("id","result", "slug","agent"));

            }
             return  "Không có dữ liệu";
           
         }
            return view("historyPageDetail",compact("id","slug","agent"));
        
    }

    public function detailHistory(Request $request, $id)
    {

        $agent = new Agent();
        return view("detailHistory",compact("id","agent"));
    }


    public function thongtintongquan (Request $request) 
    {

        $agent = new Agent();
        return view("thongtintongquan",compact("agent"));   

    }

    public  function formReward()
    {
        $agent = new Agent();
        return view("reward",compact("agent"));
    }



    public function callSikin (Request $request, $slug =null,$saleId =null) 
    {
          
            $this->setHistoryId(null);
            $isDesktop = "-1";

            
            if ($request->has('isDesktop')) {
                $isDesktop = $request->input("isDesktop");
            }
            $dataUpdate = [
                "image_base64"=> $request->input("bas64Request"),
                // "company_id" =>$this->getCompanyId(),
                // "saleId" => $this->getSaleId(),
                // "isDesktop"=>  $isDesktop
            ];

            Log::info($request->input("bas64Request"));

            $url = "https://portal.applamdep.com/api/skin/portalApp";

            $client = new Client();
            $res = $client->request('post',$url , [
                'json' =>$dataUpdate
            ]);
            if($res->getStatusCode() ==200)
            { 
            $checkresult = $res->getBody()->getContents();
           $data = json_decode($checkresult);
           $data = $data->data;

        
                // return $data; 
                
            return  [
                "is_success" =>true, 
                "data"=> $data
                ];
            }
            else 
            {
            session(['webinfo' =>[]]);
            }
    }
    public function ViewhistoryWithIframe(Request $request , $id = null )
    {

        $agent = new Agent();
            $companyGlobalId = $this->getCompanyId();
            $slug = null;
            
            $dataUser = null;

            $dataUpdate = [
                "idView"=> $id
            ];

            $loginUrl = API_BaseUrl."/".EndUser_GetHistoryById;
            $client = new Client();
            $res = $client->request('post',$loginUrl , [

                    'json' =>$dataUpdate
            ]);
            if($res->getStatusCode() ==200)
            {
                $checkresult = $res->getBody()->getContents();
                $data = json_decode($checkresult);

              

               
            
          
                if($data->is_success)
                {    
                    $data = [
                        "data" =>$data->data->Result
                    ];
                
                    
                    $isViewFrame =  true;
                    $agent = new Agent();
                    return view("history.historyDetaiIframe",compact("data","agent", "slug", "companyGlobalId","dataUser","isViewFrame","agent" ));
                } 
                return  [
                    "is_success" =>false , 
                    "data"=> null
                ];
            }
            else 
            {
                return response()->json(['message' => 'Lấy lịch sử thất bại'], $res->getStatusCode() );
            }         

    }

}
