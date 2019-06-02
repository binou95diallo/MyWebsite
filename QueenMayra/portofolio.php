<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Dream Slider a jQuery treat</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Dream Slider a jQuery treat" />
        <meta name="keywords" content="jquery, dreamslider, slider, effect, images, photos, animation, background-image"/>
        <link rel="stylesheet" href="css/dreamslider.css" type="text/css" media="screen"/>
        <style type="text/css">
            body{
                font-family:Arial, Helvetica, sans-serif;
                font-size:12px;
                color: #555;
            }
            h1{
                font-size:38px;
                margin:10px;
            }
            h1 span{
                font-size:20px;
                color : black;
            }

            .description{
                position:fixed;
                right:10px;
                top:10px;
                font-size:12px;
                color:#888;
            }

            .dreamSlider_title{
             color : #47ECBA;
            }

            span.reference{
                position:fixed;
                left:10px;
                bottom:10px;
                font-size:12px;
            }
            span.reference a{
                color:#888;
                text-transform:uppercase;
                text-decoration:none;
                padding-right:20px;
            }
            span.reference a:hover{
                color:#444;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="im_wrapper">

                <div ><img data-src="images/1.jpg" alt="" /></div>
                <div ><img data-src="images/2.jpg" alt="" /></div>
                <div ><img data-src="images/3.jpg" alt="" /></div>
                <div ><img data-src="images/4.jpg" alt="" /></div>
                <div ><img data-src="images/5.jpg" alt="" /></div>
                <div ><img data-src="images/6.jpg" alt="" /></div>

                <div ><img data-src="images/7.jpg" alt="" /></div>
                <div ><img data-src="images/8.jpg" alt="" /></div>
                <div ><img data-src="images/9.jpg" alt="" /></div>
                <div ><img data-src="images/10.jpg" alt="" /></div>
                <div ><img data-src="images/11.jpg" alt="" /></div>
                <div ><img data-src="images/12.jpg" alt="" /></div>

                <div ><img data-src="images/13.jpg" alt="" /></div>
                <div ><img data-src="images/14.jpg" alt="" /></div>
                <div ><img data-src="images/15.jpg" alt="" /></div>
                <div ><img data-src="images/16.jpg" alt="" /></div>
                <div ><img data-src="images/17.jpg" alt="" /></div>
                <div ><img data-src="images/18.jpg" alt="" /></div>

                <div ><img data-src="images/19.jpg" alt="" /></div>
                <div ><img data-src="images/20.jpg" alt="" /></div>
                <div ><img data-src="images/21.jpg" alt="" /></div>
                <div ><img data-src="images/22.jpg" alt="" /></div>
                <div ><img data-src="images/23.jpg" alt="" /></div>
                <div ><img data-src="images/24.jpg" alt="" /></div>
               

            </div>

            <div>
                <span class="reference">
                    <a href="https://github.com/dreamweiver/dreamSlider">Go to Github Page</a>
                </span>
            </div>
        </div>
        <!-- The JavaScript libraries section-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/dreamslider.min.js"></script>
        <script type="text/javascript">
            $(function(){
                $('.container').dreamSlider({
                    thumbsPerLine:6,
                    //,easeEffect: 'bounce'
                    //,easeEffect: 'standOut'
                });
            });
        </script>
    </body>
</html>
