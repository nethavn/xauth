<?php                                                                                                                                      
                                                                                                                                           
    return [                                                                                                                               
                                                                                                                                           
        'plugin' => [                                                                                                                      
            'name'              => 'NETHAVN XAUTH Service',                                                                                     
            'description'       => 'Backend Login Service for all hosted instances',                                                       
            'description_log'   => 'View all authentication attempts with Single Sign-on',                                                 
            'description_title' => 'Authentication attempts',                                                                              
            'permissions'       => 'NETHAVN XAUTH Log and Service Access'                                                                            
        ],                                                                                                                                 
                                                                                                                                           
        'settings' => [                                                                                                                    
            'google' => [                                                                                                                  
                'google_client_id'     => 'Client ID',                                                                                     
                'google_client_secret' => 'Client secret',                                                                                 
                'google_button'        => 'Google Sign-in Button',                                                                         
                'google_button_opts'   => ['dark' => 'Dark', 'light' => 'Light'],                                                          
            ],                                                                                                                             
            'generic' => [                                                                                                                 
                'section_interface'      => 'Interface',                                                                                   
                'hide_login_fields'      => 'Hide Login & Password fields',                                                                
                'hide_login_fields_comm' => 'The fields will be hidden, not disabled',                                                     
            ]                                                                                                                              
        ],                                                                                                                                 
                                                                                                                                           
        'logs' => [                                                                                                                        
            'created_at' => 'Date & Time',                                                                                                 
            'provider'   => 'Provider',                                                                                                    
            'result'     => 'Result',                                                                                                      
            'user_id'    => 'Logged User',                                                                                                 
            'email'      => 'Used E-mail',                                                                                                 
            'ip'         => 'IP address'                                                                                                   
        ],                                                                                                                                 
                                                                                                                                           
        'errors' => [                                                                                                                      
            'google' => [                                                                                                                  
                'generic'                    => 'NETHAVN Authentication Server cannot serve your request this time.:',           
                'google_client_id_blank'     => ' missing "Client ID" value',                                                              
                'google_client_secret_blank' => ' missing "Client secret" value',                                                          
                'invalid_user'               => 'The account has no access to this system or does not exist.'                              
            ]                                                                                                                              
        ],                                                                                                                                 
                                                                                                                                           
    ];                                                                                                                                     
                                                                                                                                           
?>                                                                                                                                         