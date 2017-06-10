<?php
class keyboard
{
    public $buttons = [
        'upload_jozveh'   => '🚀آپلود کردن جزوات',
        // 'upload_exam'   => '🚀آپلود کردن سوالات',
        'search_jozveh' => '🔍جستجوی جزوات',
        // 'search_exam' => '🔍جستجوی سوالات',
        'help' => '❤️راهنمایی',
        'about' => '✋️تماس با ما',
        'cancel' => '👎بازگشت'
        // 'next' => '⬅️مرحله بعد'
    ];


    public function key_start()
    {
        return  '{
                   "keyboard": [
                                 [
                                   "' . $this->buttons['upload_jozveh'] . '",
                                   "' . $this->buttons['search_jozveh'] . '"
                                 ],
                                 [
                                   "' . $this->buttons['help'] . '",
                                   "' . $this->buttons['about'] . '"
                                 ]


                              ],
                              "resize_keyboard" : true,
                              "ForceReply":{
                                  "force_reply" : true
                              }
                }';
    }


    public function go_back()
    {
        return  '{
                   "keyboard": [
                                 [
                                     "' . $this->buttons['cancel'] . '"
                                 ]
                               ],
                               "resize_keyboard" : true,
                               "ForceReply":{
                                   "force_reply" : true
                               }
                }';
    }


    public function key_next()
    {
        return  '{
                   "keyboard": [
                                 [
                                     "' . $this->buttons['next'] . '"
                                 ]
                               ],
                               "resize_keyboard" : true,
                               "ForceReply":{
                                   "force_reply" : true
                               }
                }';
    }


    public function key_age()
    {
        return  '{
                   "keyboard": [
                                 [
                                     "' . $this->buttons['one'] . '"
                                 ],
                                 [
                                     "' . $this->buttons['two'] . '"
                                 ],
                                 [
                                     "' . $this->buttons['three'] . '"
                                 ],
                                 [
                                     "' . $this->buttons['four'] . '"
                                 ],
                                 [
                                     "' . $this->buttons['go_back'] . '"
                                 ]
                               ],
                               "resize_keyboard" : true,
                               "ForceReply":{
                                   "force_reply" : true
                               }
                }';
    }


    public function key_category()
    {
        return  '{
                   "keyboard": [
                                 [
                                     "' . $this->buttons['think'] . '"
                                 ],
                                 [
                                     "' . $this->buttons['motive'] . '"
                                 ],
                                 [
                                     "' . $this->buttons['foucuse'] . '"
                                 ],
                                 [
                                     "' . $this->buttons['school'] . '"
                                 ],
                                 [
                                     "' . $this->buttons['go_back'] . '"
                                 ]
                               ],
                               "resize_keyboard" : true,
                               "ForceReply":{
                                   "force_reply" : true
                               }
                }';
    }


    public function self_service_main()
    {
        return  '{
                   "keyboard": [
                                 [
                                     "' . $this->buttons['self_service_this_week'] . '",
                                     "' . $this->buttons['self_service_credit'] . '"
                                 ],
                                 [
                                     "' . $this->buttons['go_back'] . '"
                                 ]
                               ],
                               "resize_keyboard" : true,
                               "ForceReply":{
                                   "force_reply" : true
                               }
                }';
    }


    public function location_list()
    {
        return  '{
                   "keyboard": [
                                 [
                                     "' . $this->buttons['location_to_university'] . '"
                                 ],
                                 [
                                     "' . $this->buttons['location_to_sport'] . '"
                                 ],
                                 [
                                     "' . $this->buttons['go_back'] . '"
                                 ]
                               ],
                               "resize_keyboard" : true,
                               "ForceReply":{
                                   "force_reply" : true
                               }
                }';
    }


    public function send_my_current_location()
    {
        return  '{
                   "keyboard": [
                                 [
                                     {
                                        "text" : "' . $this->buttons['send_my_current_location'] . '",
                                        "request_location" : true
                                     }
                                 ],
                                 [
                                     "' . $this->buttons['go_back'] . '"
                                 ]
                               ],
                               "resize_keyboard" : true,
                               "request" : true,
                               "ForceReply":{
                                   "force_reply" : true
                               }
                }';
    }
}
