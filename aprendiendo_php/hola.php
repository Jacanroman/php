<?php
                
                

                
                
                

                $api_url = 'https://swapi.dev/api/people/';
                $api_url1 = 'https://swapi.dev/api/people';

                
                $json_data = file_get_contents($api_url);
                //Decode JSON data in PHP array

                $response_data= json_decode($json_data,true);
                //echo($response_data[0]);
                $count = $response_data['count'];
                //print($count);
                
                $numberOfPagesLeft =  ceil(($count - 1) / 10);
                
                echo($numberOfPagesLeft);
                
                for($i=1; $i<=$numberOfPagesLeft;$i++){
                    
                    $data = file_get_contents('https://swapi.dev/api/people/?page='.$i);
                    
                    //array_push($people,file_get_contents('https://swapi.dev/api/people/?page='.$i));
                    print_r($data);
                }
                
                

                /*
                $character = json_decode(file_get_contents('https://swapi.dev/api/people/'));
                echo'<pre>';
                print_r($character);
                echo '</pre>';

                //echo ($data);
                */
            
                


?>