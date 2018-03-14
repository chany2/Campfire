<?php
      
      $siteUrl = $_GET['url'];
      $requestUrl = 'https://opengraph.io/api/1.1/site/' . urlencode($siteUrl);
      
      $requestUrl = $requestUrl . '?app_id=5a92f46487efbd253e7972d3';
       
      $siteInformationJSON = file_get_contents($requestUrl);
      $siteInformation = json_decode($siteInformationJSON, true);

      $title = issetor($siteInformation['hybridGraph']['title'], 'Campfire Chat');
      $description = issetor($siteInformation['hybridGraph']['description'], 'Create Real Sales Opportunities on Any Link You Share.');
      $image = issetor($siteInformation['hybridGraph']['image'], '');    
      $site_name = $siteInformation['hybridGraph']['site_name'];
      $video = $siteInformation['hybridGraph']['video'];  
      $locale = $siteInformation['hybridGraph']['locale'];      

      function issetor(&$var, $default) {
          return isset($var) ? $var : $default;
      }               
?>

<html>
   <head>   
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <link rel="stylesheet" href="../etc/assets/style.css">
      <link rel="stylesheet" href="../etc/assets/facebook.css">
      <link rel="stylesheet" type="text/css" href="../etc/assets/chat.css">

      <meta property="og:title" content="<?php echo $title; ?>">
      <meta property="og:url" content="<?php echo $url; ?>">
      <meta property="og:description" content="<?php echo $description; ?>">
      <meta property="og:image" content="<?php echo $image; ?>">
      <meta property="og:url" content="<?php echo $url; ?>">

      <!-- COMMON TAGS -->
      <title><?php echo $title; ?></title>
      <!-- Search Engine -->
      <meta name="description" content="<?php echo $description; ?>">
      <meta name="image" content="<?php echo $image; ?>">
      <!-- Schema.org for Google -->
      <meta itemprop="name" content="<?php echo $title; ?>">
      <meta itemprop="description" content="<?php echo $description; ?>">
      <meta itemprop="image" content="<?php echo $image; ?>">
      <!-- Twitter -->
      <meta name="twitter:card" content="summary">
      <meta name="twitter:title" content="<?php echo $title; ?>">
      <meta name="twitter:description" content="<?php echo $description; ?>">
      <!-- <meta name="twitter:site" content=""> -->
      <!-- <meta name="twitter:creator" content=""> -->
      <meta name="twitter:image:src" content="<?php echo $image; ?>">
      <!-- <meta name="twitter:player" content=""> -->
      <!-- Open Graph general (Facebook, Pinterest & Google+) -->
      <meta name="og:title" content="<?php echo $title; ?>">
      <meta name="og:description" content="<?php echo $description; ?>">
      <meta name="og:image" content="<?php echo $image; ?>">
      <meta name="og:url" content="<?php echo $url; ?>">
      <meta name="og:site_name" content="<?php echo $site_name; ?>">
      <meta name="og:video" content="<?php echo $video; ?>">
      <meta name="og:locale" content="<?php echo $locale; ?>">
      <!-- <meta name="fb:admins" content="">
      <meta name="fb:app_id" content=""> -->
      <meta name="og:type" content="website">

      <style>
         /*body{
         overflow-y: scroll;
         }
         .scroll-wrapper {
         overflow: auto;
         -webkit-overflow-scrolling: touch;
         overflow-y: scroll;
         } */
         #iframe iframe{
         height: calc(100% - 50px);
         /*position: relative;*/
         /*position: absolute;*/
         left: 0;
         right: 0;
         top: 0;
         bottom: 0;
         border: 0;
         height: 90%;
         min-width: 100%;
         width: 10px;
         -webkit-overflow-scrolling: touch;
         overflow-y: scroll;
         }
         .fb-livechat-welcome{
          bottom: 290pt;
         }
      </style>
   </head>
   <body>
      <div class="scroll-wrapper">
         <div id="iframe" style="border-bottom: 3px solid;">
            <!-- <iframe width="100%" height="90%" scrolling="no" frameborder="0" src=""></iframe> -->
         </div>
      </div>
      <div class="fb-livechat">
         <div class="fb-livechat-welcome" id="chat-welcome" width="1000px" height="1000px" >
            <div class="_li">
               <div class="pluginSkinLight pluginFontHelvetica">
                  <div>
                     <div id="u_0_0">
                        <div class="_30ss">
                           <div class="_j68">
                              <div class="promptHeaderContainer">
                                 <div class="promptTextContainer">
                                    <div class="promptHeader"><img src="https://thumbs.gfycat.com/ResponsibleBeautifulHoki-max-1mb.gif" style="margin:10px">Hey its Jason here! Want to get more leads faster without spending more?<br><br>Click Chat Now, I'll send you my recorded webinar.
                                    </div>
                                    <div class="promptSubheader">
                                       <div class="profilePictureContainer">
                                          <div class="_4cqr">
                                             <img class="profilePicture img" src="https://media.licdn.com/dms/image/C4D03AQGeTyDssyLsaw/profile-displayphoto-shrink_800_800/0?e=1526169600&v=alpha&t=XA04VIgAk-jDYJzqhHB71BVaBOnPvibw9N4n75uG3hI" alt="">
                                             <div class="clearfix"></div>
                                          </div>
                                       </div>
                                       <div class="username">Jason Bay</div>
                                       <!-- <a class="notYouLink" href="#">Not you?</a> -->
                                    </div>
                                 </div>
                                 <div class="_4cqr">
                                    <img class="profilePicture img" alt="">
                                    <div class="clearfix"></div>
                                 </div>
                                 <div class="closeButtonContainer">
                                    <div class="_4bqf _2t-5 fb-button" tabindex="0" role="button">
                                       <svg width="10px" height="10px" viewBox="0 0 14 14">
                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                             <g transform="translate(-419.000000, -413.000000)">
                                                <g transform="translate(164.000000, 396.000000)">
                                                   <g>
                                                      <g transform="translate(250.000000, 12.000000)">
                                                         <g>
                                                            <g>
                                                               <rect opacity="0.200000003" x="0" y="0" width="24" height="24"></rect>
                                                               <g transform="translate(4.000000, 4.000000)" fill="#000000">
                                                                  <rect transform="translate(8.000000, 8.000000) rotate(45.000000) translate(-8.000000, -8.000000) " x="7" y="-1" width="2" height="18" rx="1"></rect>
                                                                  <rect transform="translate(8.000000, 8.000000) rotate(135.000000) translate(-8.000000, -8.000000) " x="7" y="-1" width="2" height="18" rx="1"></rect>
                                                               </g>
                                                            </g>
                                                         </g>
                                                      </g>
                                                   </g>
                                                </g>
                                             </g>
                                          </g>
                                       </svg>
                                    </div>
                                 </div>
                              </div>
                              <a onclick="window.open('https://www.linkedin.com/messaging/compose/?after=mynetwork.index&recipient=jasondbay', '_blank')"><div class="promptButtonContainer">
                                 <div class="_4bqf promptButton" tabindex="0" role="button" style="color: rgb(0, 132, 255);">Chat Now</div></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="ctrlq fb-overlay" style="display: none;"></div>
         <div class="fb-widget" style="display: none; bottom: 0px; opacity: 0;">
            <div class="fb-customerchat fb_invisible_flow fb_iframe_widget" page_id="450517685117626" ref="5a0f1e4c5fbb4043950463df" minimized="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=712856635533512&amp;container_width=0&amp;locale=en_US&amp;minimized=false&amp;page_id=450517685117626&amp;ref=5a0f1e4c5fbb4043950463df&amp;sdk=joey">
               <span style="vertical-align: bottom; width: 1000px; height: 0px;">
                  <div class="scroll-wrapper">
                     <iframe name="f177f0ad30ab644" width="1000px" height="100px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:customerchat Facebook Social Plugin" src="customerchat.html" style="border: none; visibility: visible; width: 270pt; height: 360pt; border-radius: 9pt; bottom: 72pt; box-shadow: rgba(0, 0, 0, 0.15) 0px 3pt 12pt; display: inline; padding: 0px; position: fixed; left: 18pt; top: auto; z-index: 2147483647;" class="" data-testid="dialog_iframe"></iframe>
                  </div>
               </span>
            </div>
            <!-- <div class="ctrlq fb-close"></div>
               <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/digital.inspiration/" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=0&amp;height=400&amp;hide_cover=true&amp;href=https%3A%2F%2Fwww.facebook.com%2Fdigital.inspiration%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=false&amp;small_header=true&amp;tabs=messages&amp;width=360"><span style="vertical-align: top; width: 0px; height: 0px; overflow: hidden;"><iframe name="f370d6b1e807d18" width="360px" height="400px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v2.9/plugins/page.php?app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FlY4eZXm_YWu.js%3Fversion%3D42%23cb%3Df2c8a18651c7154%26domain%3D%26origin%3Dfile%253A%252F%252F%252Ff361d462ab4d3c%26relation%3Dparent.parent&amp;container_width=0&amp;height=400&amp;hide_cover=true&amp;href=https%3A%2F%2Fwww.facebook.com%2Fdigital.inspiration%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=false&amp;small_header=true&amp;tabs=messages&amp;width=360" style="border: none; visibility: visible; width: 0px; height: 0px;"></iframe></span></div>
               <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="http://staticxx.facebook.com/connect/xd_arbiter/r/lY4eZXm_YWu.js?version=42#channel=f361d462ab4d3c&amp;origin=file%3A%2F%2F" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/lY4eZXm_YWu.js?version=42#channel=f361d462ab4d3c&amp;origin=file%3A%2F%2F" style="border: none;"></iframe></div></div></div> -->
         </div>
         <a title="Send us a message on Facebook" class="ctrlq fb-button" style="display: block;"></a>
         <p id="console" class="hidden none">Loading...</p>
         <p id="poweredby" style="float:right;margin:20px">Powered by <b>Campfire</b></p>
      </div>
   </body>
   <script type="text/javascript">
      $(document).ready(function(){
        var url = $.urlParam('url');
        $("#iframe iframe").attr({'src':url});
      
        // TESTING IF IFRAME, ELSE REDIRECT
        if(canAccessIFrame(url)){
      
        }else{
          //window.location.replace(url);
        }
      
      });
      
      $.urlParam = function(name, url) {
        if (!url) {
         url = window.location.href;
        }
        var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(url);
        if (!results) {
            return undefined;
        }
        return results[1] || undefined;
      }
   </script>
   <script>
      $(document).ready(function() {
              var t = {
                  delay: 125,
                  overlay: $(".fb-overlay"),
                  widget: $(".fb-widget"),
                  button: $(".fb-button"),
                  welcome: $(".fb-livechat-welcome")
              };
              setTimeout(function() {
                  $("div.fb-livechat").fadeIn()
              }, 8 * t.delay), $(".ctrlq").on("click", function(e) {
                  e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({
                      bottom: 0,
                      opacity: 0
                  }, 2 * t.delay, function() {
                      //$(this).hide("slow"), t.button.show()
                  })) : t.welcome.fadeOut(t.delay, function(){
                  //   t.widget.stop().show().animate({
                  //         bottom: "100px",
                  //         opacity: 1
                  // }, 2 * t.delay), t.overlay.fadeIn(t.delay)
                  })
              })
      
              $('.fb-button').click(function(){
                if($('.fb-livechat-welcome').css('display') == 'none'){
                  t.welcome.fadeIn(t.delay);
                }else{
                  t.welcome.fadeOut(t.delay);
                }
              });
      
              // $('.promptButton').click(function(){
              //   t.welcome.fadeOut(t.delay, function(){
              //     t.widget.stop().show().animate({
              //           bottom: "100px",
              //           opacity: 1
              //   }, 2 * t.delay), t.overlay.fadeIn(t.delay)
              //   })
              // });
          });
      
      function canAccessIFrame(url) {
          var iframeLoaded = false;
          var iframe = document.createElement('iframe');
      
          // ***** SWAP THE `iframe.src` VALUE BELOW FOR DIFFERENT RESULTS ***** //
          // iframe.src = "https://jsfiddle.net/7qusz4q3/117/"; // This will work. There is no 'X-Frame-Options' header.
          iframe.src = url; // This won't work. 'X-Frame-Options' is set to 'SAMEORIGIN'.
          // iframe.id = 'theFrame';
           
          var iframeOnloadEvent = function () {
            iframeLoaded = true;
            var consoleDiv = document.getElementById('console');
            if (iframe.contentWindow.length > 0) {
              consoleDiv.innerHTML = '✔ Content window loaded: ' + iframe.src;
              consoleDiv.style.cssText = 'color: green;'
              // REMOVE TESTING
              $('#theFrame').remove();
            } else {
              // REDIRECT
              if(url.indexOf("ampproject") || url.indexOf("youtube.com/embed") !== -1 ){
      
              }else{
                window.location.replace(url);
                consoleDiv.innerHTML = '✘ Content window failed to load: ' + iframe.src;
                consoleDiv.style.cssText = 'color: red;'
              }
              
            }
          } 
      
          if (iframe.attachEvent){
            iframe.attachEvent('onload', iframeOnloadEvent);
          } else {
            iframe.onload = iframeOnloadEvent;
          }
          $('#iframe').append(iframe);
      
          // iframe.onload event doesn't trigger in firefox if loading mixed content (http iframe in https parent) and it is blocked.
          setTimeout(function () {
            if (iframeLoaded === false) {
              //window.location.replace(url);
              consoleDiv.innerHTML = '✘ iframe failed to load within 5s: ' + iframe.src;
              consoleDiv.style.cssText = 'color: red;'    
            }
      
            $('#theFrame').remove();
          }, 5000);
      }
   </script>
</html>