<?php
function link_detect($text) {
                 $regex = '/(https?:\/\/|www\.)[^ ]+/';
            
                preg_match_all($regex, $text, $matches);
            
                $liens = [];
            
                for ($i = 0; $i < count($matches[0]); $i++) {
                    $liens[] = [
                        "href" => $matches[0][$i],
                        "text" => $matches[0][$i]
                    ];
                }
            
                return $liens;
            }
            
            function linkreplace($text){

                $data = $text;
                $liens = link_detect($text);
                
                foreach ($liens as $lien) {
                    $url = "<a href=".$lien['href'].">".$lien['text']."</a>";
                    $data = str_replace($lien['text'], $url, $text);
                }

                return $data;
            }