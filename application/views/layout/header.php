<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Yields -</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name='title' content='Website Design and Development in Nigeria | Yields' /> 
<meta name='twitter:card' content='summary' /> 
<meta property='og:type' content='website' /> 
<meta name='description' content='Yield provides website design services including planning and information architecture, UX and visual design, website development, testing and ongoing support.' /> 
<meta name='twitter:description' content='Yields provides website design services including planning and information architecture, UX and visual design, website development, testing and ongoing support.' /> 
<meta property='og:description' content='Yields provides website design services including planning and information architecture, UX and visual design, website development, testing and ongoing support.' /> 
<link href="<?php echo base_url('assets/css/bootstrap-responsive.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/color/default.css')?>" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico')?>">
<script src="<?php echo base_url('assets/js/typed.js')?>" type="text/javascript"></script>
<link href="<?php echo base_url('assets/css/main.css')?>" rel="stylesheet"/>
    <script>
    document.addEventListener('DOMContentLoaded', function(){

        Typed.new("#typed", {
            stringsElement: document.getElementById('typed-strings'),
            typeSpeed: 10,
            backDelay: 500,
            loop: false,
            contentType: 'html', // or text
            // defaults to null for infinite loop
            loopCount: null,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        var resetElement = document.querySelector('.reset');
        if(resetElement) {
            resetElement.addEventListener('click', function() {
                document.getElementById('typed')._typed.reset();
            });
        }

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }

    </script>
    <style>
        /* code for animated blinking cursor */
        .typed-cursor{
            opacity: 1;
            font-weight: 100;
            -webkit-animation: blink 0.7s infinite;
            -moz-animation: blink 0.7s infinite;
            -ms-animation: blink 0.7s infinite;
            -o-animation: blink 0.7s infinite;
            animation: blink 0.7s infinite;
        }
        @-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-webkit-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-moz-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-ms-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-o-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }

        .typed-fade-out{
            opacity: 0;
            animation: 0;
            transition: opacity .25s;
        }
    </style>    
    
</head>