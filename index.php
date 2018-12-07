<html>
<head>
    <title>실내로</title>
    <meta charset="utf-8" />
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {            
            $.ajax({
                url: "output.csv",
                dataType: "text",
                success: function (data) {                 
                    var text = $('#newCheckText').val();
                    var str = data;
                    var str_array = str.split('\n');
                    var i, j;
                    for (i = 0; i < str_array.length; i++) {
                                // Trim the excess whitespace.
                                str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
                                // Add additional code here, such as:
                                //console.log(str_array[i]);

                                //alert(str_array[i]);
                                if(i==0)
                                    $('#print1').append('<br />'+'<br />');

                                if((i+2)%4==0){
                                    $('#print1').append('<img src="'+ str_array[i] + '">'+'<br />'+'<br />');
                                    

                                } else{
                                    $('#print1').append(str_array[i]+'<br />'); 
                                }

                                if((i+1)%4==0){
                                    $('#print1').append('<br />'+'<br />');
                                    j=i+1;   
                                    break;
                                }
                            }

                            for (i = j; i < str_array.length; i++) {
                                // Trim the excess whitespace.
                                str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
                                // Add additional code here, such as:
                                //console.log(str_array[i]);

                                //alert(str_array[i]);
                                if(i==j)
                                    $('#print2').append('<br />'+'<br />');

                                if((i+2)%4==0){
                                    $('#print2').append('<img src="'+ str_array[i] + '">'+'<br />'+'<br />');

                                } else{
                                    $('#print2').append(str_array[i]+'<br />'); 
                                }

                                if((i+1)%4==0){
                                    $('#print2').append('<br />'+'<br />');
                                    j=i+1;   
                                    break;
                                }
                            }

                            for (i = j; i < str_array.length; i++) {
                                // Trim the excess whitespace.
                                str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
                                // Add additional code here, such as:
                                //console.log(str_array[i]);

                                //alert(str_array[i]);
                                if(i==j)
                                    $('#print3').append('<br />'+'<br />');

                                if((i+2)%4==0){
                                    $('#print3').append('<img src="'+ str_array[i] + '">'+'<br />'+'<br />');

                                } else{
                                    $('#print3').append(str_array[i]+'<br />'); 
                                }

                                if((i+1)%4==0){
                                    $('#print3').append('<br />'+'<br />');   
                                    break;
                                }
                            }

                            
                        }                   
                    });
        });
    </script>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    

    <script src="jquery-1.12.4.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style type="text/css">

    html {
        min-width: 800px;
    }

    #full-slider-wrapper {
        overflow: hidden;
    }

    #full-slider {
        position: relative;
        width: 40%;
        height: 70%;
        margin-left: 100;
        margin: 0 auto;
    }

    #full-slider .slide-panel {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 99%;
        visibility: hidden;
    }

    #full-slider .slide-panel.active1{
        visibility: visible;
    }

    #full-slider-nav {
        position: absolute;
        top: 0;
        right: 0;
    }

    #full-slider-nav-left, #full-slider-nav-right {
        display: inline-block;
        height: 0;
        width: 0;
        margin-left: 15px;
        border: 20px solid transparent;
        cursor: pointer;
    }

    #full-slider-nav-left {
        border-right-color: #BBB;
    }

    #full-slider-nav-left:hover {
        border-right-color: #999;
    }

    #full-slider-nav-right {
        border-left-color: #BBB;
    }

    #full-slider-nav-right:hover {
        border-left-color: #999;
    }

    #full-slider .slide-panel {
        background-color: rgba(0,0,0,0.8);
        color: #DDD;
    }

    input[id="eatingfood"] + label {
        display: inline-block;
        background-color: rgba(0,0,0,0.8);
        width: 20%;
        height: 23%;
        border: 4px solid #bcbcbc;
        cursor:pointer;
        font-size: 40;
        color : white;
    }
    input[id="eatingfood"]:checked + label {
        background-color: rgba(0,0,255,0.6);
    }
    input[id="eatingfood"] {
        display: none;
    }

    input[id="drinking"] + label {
        display: inline-block;
        background-color: rgba(0,0,0,0.8);
        width: 20%;
        height: 23%;
        border: 4px solid #bcbcbc;
        cursor: pointer;
        font-size: 40;
        color : white;
    }
    input[id="drinking"]:checked + label {
        background-color: rgba(0,0,255,0.6);
    }
    input[id="drinking"] {
        display: none;
    }

    input[id="meaningfulplace"] + label {
        display: inline-block;
        background-color: rgba(0,0,0,0.8);
        width: 20%;
        height: 23%;
        border: 4px solid #bcbcbc;
        cursor: pointer;
        font-size: 40;
        color : white;
    }
    input[id="meaningfulplace"]:checked + label {
        background-color: rgba(0,0,255,0.6);
    }
    input[id="meaningfulplace"] {
        display: none;
    }

    input[id="outdoors"] + label {
        display: inline-block;
        background-color: rgba(0,0,0,0.8);
        width: 20%;
        height: 23%;
        border: 4px solid #bcbcbc;
        cursor: pointer;
        font-size: 40;
        color : white;
    }
    input[id="outdoors"]:checked + label {
     background-color: rgba(0,0,255,0.6);
 }
 input[id="outdoors"] {
    display: none;
}

input[id="seeandhear"] + label {
    display: inline-block;
    background-color: rgba(0,0,0,0.8);
    width: 20%;
    height: 23%;
    border: 4px solid #bcbcbc;
    cursor: pointer;
    font-size: 40;
    color : white;
}
input[id="seeandhear"]:checked + label {
    background-color: rgba(0,0,255,0.6);
}
input[id="seeandhear"] {
    display: none;
}

input[id="watch"] + label {
    display: inline-block;
    background-color: rgba(0,0,0,0.8);
    width: 20%;
    height: 23%;
    border: 4px solid #bcbcbc;
    cursor: pointer;
    font-size: 40;
    color : white;
}
input[id="watch"]:checked + label {
    background-color: rgba(0,0,255,0.6);
}
input[id="watch"] {
    display: none;
}

input[id="play"] + label {
    display: inline-block;
    background-color: rgba(0,0,0,0.8);
    width: 20%;
    height: 23%;
    border: 4px solid #bcbcbc;
    cursor: pointer;
    font-size: 40;
    color : white;
}
input[id="play"]:checked + label {
    background-color: rgba(0,0,255,0.6);
}
input[id="play"] {
    display: none;
}

input[id="shopping"] + label {
    display: inline-block;
    background-color: rgba(0,0,0,0.8);
    width: 20%;
    height: 23%;
    border: 4px solid #bcbcbc;
    cursor: pointer;
    font-size: 40;
    color : white;
}
input[id="shopping"]:checked + label {
    background-color: rgba(0,0,255,0.6);
}
input[id="shopping"] {
    display: none;
}

input[id="exercise"] + label {
    display: inline-block;
    background-color: rgba(0,0,0,0.8);
    width: 20%;
    height: 23%;
    border: 4px solid #bcbcbc;
    cursor: pointer;
    font-size: 40;
    color : white;
}
input[id="exercise"]:checked + label {
    background-color: rgba(0,0,255,0.6);
}
input[id="exercise"] {
    display: none;
}

</style>
</head>
<body>
    <div class="content" id="content1">
        <button class="goto" target="2">검색하기</button>
        <center>
            <input type="checkbox" id="eatingfood" value="EatingFood">
            <label for="eatingfood"><center>식사</center> </label>

            <input type="checkbox" id="drinking" value="Drinking">
            <label for="drinking"><center>주점&바</center> </label>

            <input type="checkbox" id="meaningfulplace" value="MeaningfulPlace">
            <label for="meaningfulplace"><center>의미있는 곳</center> </label>

        </br></br>

        <input type="checkbox" id="outdoors" value="Outdoor">
        <label for="outdoors"><center>야외</center> </label>

        <input type="checkbox" id="seeandhear" value="SeeAndHear">
        <label for="seeandhear"><center>관람</center> </label>

        <input type="checkbox" id="watch" value="Watch">
        <label for="watch"><center>전시</center> </label>

    </br></br>

    <input type="checkbox" id="play" value="Play">
    <label for="play"><center>오락</center> </label>

    <input type="checkbox" id="shopping" value="Shopping">
    <label for="shopping"><center>쇼핑</center> </label>

    <input type="checkbox" id="exercise" value="Exercise">
    <label for="exercise"><center>운동</center> </label>

</center>
</div>

<div class="content" id="content2">
    <button class="goto" target="1">처음으로</button>
    <div id="full-slider-wrapper">
        <div id="full-slider">

          <div class="slide-panel active1">
            <center>
                <div id="print1">

                </div>
            </center>
            <br>

        </div>

        <div class="slide-panel">
            <center>
                <div id="print2">

                </div>
            </center>
            <br>

        </div>

        <div class="slide-panel">
            <center>
                <div id="print3">

                </div>
            </center>
            <br>

        </div>
    </div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
        function slidePanel( newPanel, direction ) {
            // define the offset of the slider obj, vis a vis the document
            var offsetLeft = $slider.offset().left;

            // offset required to hide the content off to the left / right
            var hideLeft = -1 * ( offsetLeft + $slider.width() );
            var hideRight = $(window).width() - offsetLeft;

            // change the current / next positions based on the direction of the animation
            if ( direction == 'left' ) {
                currPos = hideLeft;
                nextPos = hideRight;
            }
            else {
                currPos = hideRight;
                nextPos = hideLeft;
            }

            // slide out the current panel, then remove the active class
            $slider.children('.slide-panel.active1').animate({
                left: currPos
            }, 500, function() {
                $(this).removeClass('active1');
            });

            // slide in the next panel after adding the active class
            $( $sliderPanels[newPanel] ).css('left', nextPos).addClass('active1').animate({
                left: 0
            }, 500 );
        }

        var $slider = $('#full-slider');
        var $sliderPanels = $slider.children('.slide-panel');

        var $navWrap = $('<div id="full-slider-nav"></div>').appendTo( $slider );
        var $navLeft = $('<div id="full-slider-nav-left"></div>').appendTo( $navWrap );
        var $navRight = $('<div id="full-slider-nav-right"></div>').appendTo( $navWrap );

        var currPanel = 0;

        $navLeft.click(function() {
            currPanel--;

            // check if the new panel value is too small
            if ( currPanel < 0 ) currPanel = $sliderPanels.length - 1;

            slidePanel(currPanel, 'right');
        });

        $navRight.click(function() {
            currPanel++;

        // check if the new panel value is too big
        if ( currPanel >= $sliderPanels.length ) currPanel = 0;

        slidePanel(currPanel, 'left');
    });
    });
</script>
<button class="goto" target="3">평가하기</button>
</div>

<div class="content" id="content3">
    <button class="goto" target="1">처음으로</button>
</div>


<script>
    $(function(){
        $(window).scroll(function(){
            var height = $('#content1').height();
            var scroll_y = $(document).scrollTop();
            var current = Math.floor(scroll_y/height) + 1;

            $('.active').removeClass('active');
            $('.goto[target=' + current + ']').addClass('active');
        });

        $('.goto').click(function(){
            var target = $(this).attr('target');
            var scrollTop = $('#content' + target).offset().top;
            $('html, body').stop().animate({scrollTop:scrollTop}, 700, 'swing');
        });
    });
</script>
</body>
</html>