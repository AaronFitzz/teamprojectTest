{"changed":true,"filter":false,"title":"grayscale.js","tooltip":"/grayscale/js/grayscale.js","value":"//jQuery to collapse the navbar on scroll\n$(window).scroll(function() {\n    if ($(\".navbar\").offset().top > 50) {\n        $(\".navbar-fixed-top\").\n        addClass(\"top-nav-collapse\");\n    } else {\n        $(\".navbar-fixed-top\").removeClass(\"top-nav-collapse\");\n    }\n});\n\n\n\n//jQuery for page scrolling feature - requires jQuery Easing plugin\n$(function() {\n    $('.page-scroll a').bind('click', function(event) {\n        var $anchor = $(this);\n        $('html, body').stop().animate({\n            scrollTop: $($anchor.attr('href')).offset().top\n        }, 1500, 'easeInOutExpo');\n        event.preventDefault();\n    });\n});\n//Hide success message in account page\nwindow.onload = function() {\n  document.getElementById('successMsg').style.display = 'none';\n};\nfunction showSuccessMsg(){\n    document.getElementById('successMsg').style.display = 'block';\n    setTimeout(hideSuccessMsg, 3000);\n}\nfunction hideSuccessMsg(){\n    document.getElementById('successMsg').style.display = 'none';\n}\n//hide event details\nwindow.onload = function() {\n  document.getElementById('eventDet').style.display = 'none';\n  document.getElementById('eventDet1').style.display = 'none';\n  document.getElementById('eventDet2').style.display = 'none';\n  document.getElementById('evWrap').style.display = 'none';\n  document.getElementById('eventDetMain').style.display = 'none';\n   document.getElementById('map').style.display = 'none';\n    document.getElementById('method').style.display = 'none';\n    document.getElementById('route').style.display = 'none';\n};\nfunction showEventMsg(){\n    document.getElementById('eventDet').style.display = 'block';\n    document.getElementById('eventDet1').style.display = 'block';\n    document.getElementById('eventDet2').style.display = 'block';\n    document.getElementById('eventDetMain').style.display = 'block';\n    \n    document.getElementById('map').style.display = 'block';\n    \n    document.getElementById('method').style.display = 'block';\n    \n    document.getElementById('route').style.display = 'block';\n}\nfunction hideEventMsg(){\n    document.getElementById('eventDet').style.display = 'none';\n    document.getElementById('eventDet1').style.display = 'none';\n    document.getElementById('eventDet2').style.display = 'none';\n    document.getElementById('evWrap').style.display = 'none';\n    document.getElementById('eventDetMain').style.display = 'none';\n    document.getElementById('testing1').style.display = 'none';\n    document.getElementById('map').style.display = 'none';\n    document.getElementById('method').style.display = 'none';\n    document.getElementById('route').style.display = 'none';\n}\n\n//the function to hide the div\nfunction hideDiv(){\n\n    if ($(window).width() < 1024) {\n\n             document.getElementById(\"eventDet1\").style.display = \"none\";\n             document.getElementById(\"eventDet2\").style.display = \"none\";\n\n    }\n    else{\n         document.getElementById(\"eventDet1\").style.display = \"block\";\n         document.getElementById(\"eventDet2\").style.display = \"block\";\n    }\n\n}\n//\n/*\n$('.thumbnail').on('click', function () {\n    $('#testing1').text(\"new dialog title\");\n});\n$('.thumbnail').on('click', function () {\n    $('#eventDetMain').text($(this).text());\n\n});*/\n$('.thumbnail').on('click', function () {\n    $(\"#eventDetMain\").empty();\n    \n$(this).clone().appendTo( \"#eventDetMain\" );\n});\nfunction changeImage(a) {\n        document.getElementById(\"evImg\").src=a;\n    }\n//password validate\nfunction checkPasswordMatch() {\n    var password = $(\"#password\").val();\n    var confirmPassword = $(\"#password2\").val();\n\n    if (password != \"\" && confirmPassword != \"\" && password == confirmPassword){\n        $(\"#divPasswordsMatch\").html(\"<h6 class='smallSp'>Passwords match</h6>\");\n        $('#password2').html('matching').css('background-color', 'rgba(67, 236, 118, 0.6)');\n}\n        \n    else if(confirmPassword == \"\"){\n        $('#password2').html('matching').css({'background-color': 'transparent'});\n        $(\"#divPasswordsMatch\").html(\"\");\n    }\n    else{\n        $(\"#divPasswordsMatch\").html(\"<h6 class='smallSp'>Passwords do not match</h6>\");\n        $('#password2').html('matching').css({'background-color': 'rgba(233, 32, 56, 0.6)'});\n    }\n    \n}\n//enable buttons\n(function() {\n    $('.theForm > input').keyup(function() {\n\n        var empty = false;\n        $('.theForm > input').each(function() {\n            if ($(this).val() == '') {\n                empty = true;\n            }\n        });\n\n        if (empty) {\n            $('#register').attr('disabled', 'disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie\n        } else {\n            $('#register').removeAttr('disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie\n        }\n    });\n})\n\n$(document).ready(function () {\n   $(\"#password, #password2\").keyup(checkPasswordMatch);\n});\n//Form validation\nfunction validateForm() {\n    var a = document.forms[\"theForm\"][\"fname\"].value;\n    var b = document.forms[\"theForm\"][\"lname\"].value;\n    var c = document.forms[\"theForm\"][\"username\"].value;\n    var d = document.forms[\"theForm\"][\"email\"].value;\n    var e = document.forms[\"theForm\"][\"dob\"].value;\n    var f = document.forms[\"theForm\"][\"gender\"].value;\n    if (a == null || a == \"\") {\n        alert(\"First name must be filled out\");\n        return false;\n    }\n    if (b == null || b == \"\") {\n        alert(\"Last name must be filled out\");\n        return false;\n    }\n    if (c == null || c == \"\") {\n        alert(\"Username name must be filled out\");\n        return false;\n    }\n    if (d == null || d == \"\") {\n        alert(\"Email name must be filled out\");\n        return false;\n    }\n    if (e == null || e == \"\") {\n        alert(\"DOB name must be filled out\");\n        return false;\n    }\n    if (f == null || f == \"\") {\n        alert(\"Gender name must be filled out\");\n        return false;\n    }\n}\n$(document).ready( function() {\n  var form = $('.theForm');\n  var formMessages = $('#successMsg');\n// Set up an event listener for the contact form.\n$(form).submit(function(event) {\n    // Stop the browser from submitting the form.\n    event.preventDefault();\n    var formData = $(form).serialize();\n    $.ajax({\n    type: 'POST',\n    url: $(form).attr('action'),\n    data: formData,\n    dataType: \"json\",\n    success: function(formData) {\n    if(formData.status == 'success'){\n        showSuccessMsg(); \n    }else if(formData.status == 'error'){\n        alert(\"Error on query!\");\n    }\n}\n})})\n});\n\n$(document).ready( function() {\n  var form = $('#theForm');\n  var formMessages = $('#successMsg');\n// Set up an event listener for the contact form.\n$(form).submit(function(event) {\n    // Stop the browser from submitting the form.\n    event.preventDefault();\n    var formData = $(form).serialize();\n    $.ajax({\n    type: 'POST',\n    url: $(form).attr('action'),\n    data: formData,\n    success: function(formData) {\n        $(\"#formError\").html(formData);\n    }\n})})\n});\n\n$(document).ready( function() {\n  var form = $('#theForm2');\n// Set up an event listener for the contact form.\n$(form).submit(function(event) {\n    // Stop the browser from submitting the form.\n    event.preventDefault();\n    var formData = $(form).serialize();\n    $.ajax({\n    type: 'POST',\n    url: $(form).attr('action'),\n    data: formData,\n    dataType: \"html\"\n}\n)})});\n\n// $(document).ready( function() {\n//   var form = $('#theForm2');\n// // Set up an event listener for the contact form.\n// $(form).submit(function(event) {\n//     // Stop the browser from submitting the form.\n//     event.preventDefault();\n//     var formData = $(form).serialize();\n//     $.ajax({\n//     type: 'POST',\n//     url: $(form).attr('action'),\n//     data: formData,\n//     success: function(formData) {\n//         $(\"#checkInHere\").html(formData);\n//     }\n// })})\n// });\nvar interval = 1000;  // 1000 = 1 second, 3000 = 3 seconds\nfunction checkIn() {\n    $.ajax({\n            type: 'GET',\n            url: 'php/checkIn.php',\n            data: $(this).serialize(),\n            dataType: 'json',\n            success: function (data) {\n                    $(\"#checkInHere\").html(data);// first set the value     \n            },\n            complete: function (data) {\n                    // Schedule the next\n                    setInterval(checkIn, interval);\n            }\n    });\n}\nsetInterval(checkIn, interval);\n\n// function checkIn(){\n//                 var req = new XMLHttpRequest();\n//                 req.onreadystatechange = function(e){\n//                     if(req.readyState == 4 && req.status == 200){\n//                         document.getElementById('checkInHere').innerHTML = req.responseText;\n//                     }\n//                 }\n//                 req.open('GET', 'php/checkIn.php', true);\n//                 req.send();\n//             }setInterval(function(){checkIn();},1000);\n            \n// function addCheckIn(){\n//                 var req = new XMLHttpRequest();\n//                 req.onreadystatechange = function(e){\n//                     if(req.readyState == 4 && req.status == 200){\n//                         document.getElementById('checkInHere').innerHTML = req.responseText;\n//                     }\n//                 }\n//                 req.open('POST', 'php/addCheckIn.php', true);\n//                 req.send();\n//             }\n          \n//           function checkUserIdExists(){\n//     return $.ajax({\n//         type: \"GET\",\n//         url: \"php/checkIn.php\",             \n//         dataType: \"html\",   //expect html to be returned                \n//         success : function (result) {\n//           console.log(result['people']) \n//           $(\"#checkInHere\").append(result['people'])// The value of your php $row['adverts'] will be displayed\n//         }\n//     });\n// };\n/*\n           ($(document).ready(function please() {\n          \n\n      $.ajax({    //create an ajax request to load_page.php\n        type: \"GET\",\n        url: \"php/checkIn.php\",             \n        dataType: \"html\",   //expect html to be returned                \n        success: function(response){                    \n            $(\"#checkInHere\").append(response)\n            //alert(response);\n        }\n\n    });\n});setInterval(function(){please();},100);\n          \n          */\n//code for trending event\n          \n          (function trending(){\nvar $wrapper = $('.thumbnail');\n\n$wrapper.find('#checkInHere').sort(function (a, b) {\n    return +a.getElementById('checkInHere') - +b.getAttribute('checkInHere');\n})\n.appendTo( $wrapper );\n          })\n          \n\n\n//raduis\nvar marker = new google.maps.Marker({\n  map: map,\n  position: new google.maps.LatLng(53.3534, -6.21832031),\n  title: 'dublin '\n});\n\n// Add circle overlay and bind to marker\nvar circle = new google.maps.Circle({\n  map: map,\n  radius: 96.56,    // 10 miles in metres\n  fillColor: '#AA000'\n});\ncircle.bindTo('center', marker, 'position');\n\n\n\n\n\n//map resize\n\nfunction map2(){\n    google.maps.event.trigger(map, 'resize');\n}setInterval(function(){map2();},1000);\n\n//Google Map Skin - Get more at http://snazzymaps.com/\n\n//var myOptions = {\n  //  zoom: 15,\n    //center: new google.maps.LatLng(53.3534, -6.21832031),\n    //mapTypeId: google.maps.MapTypeId.ROADMAP,\n    //disableDefaultUI: true,\n//     styles: [{\n//         \"featureType\": \"water\",\n//         \"elementType\": \"geometry\",\n//         \"stylers\": [{\n//             \"color\": \"#000000\"\n//         }, {\n//             \"lightness\": 17\n//         }]\n//     }, {\n//         \"featureType\": \"landscape\",\n//         \"elementType\": \"geometry\",\n//         \"stylers\": [{\n//             \"color\": \"#000000\"\n//         }, {\n//             \"lightness\": 20\n//         }]\n//     }, {\n//         \"featureType\": \"road.highway\",\n//         \"elementType\": \"geometry.fill\",\n//         \"stylers\": [{\n//             \"color\": \"#000000\"\n//         }, {\n//             \"lightness\": 17\n//         }]\n//     }, {\n//         \"featureType\": \"road.highway\",\n//         \"elementType\": \"geometry.stroke\",\n//         \"stylers\": [{\n//             \"color\": \"#000000\"\n//         }, {\n//             \"lightness\": 29\n//         }, {\n//             \"weight\": 0.2\n//         }]\n//     }, {\n//         \"featureType\": \"road.arterial\",\n//         \"elementType\": \"geometry\",\n//         \"stylers\": [{\n//             \"color\": \"#000000\"\n//         }, {\n//             \"lightness\": 18\n//         }]\n//     }, {\n//         \"featureType\": \"road.local\",\n//         \"elementType\": \"geometry\",\n//         \"stylers\": [{\n//             \"color\": \"#000000\"\n//         }, {\n//             \"lightness\": 16\n//         }]\n//     }, {\n//         \"featureType\": \"poi\",\n//         \"elementType\": \"geometry\",\n//         \"stylers\": [{\n//             \"color\": \"#000000\"\n//         }, {\n//             \"lightness\": 21\n//         }]\n//     }, {\n//         \"elementType\": \"labels.text.stroke\",\n//         \"stylers\": [{\n//             \"visibility\": \"on\"\n//         }, {\n//             \"color\": \"#000000\"\n//         }, {\n//             \"lightness\": 16\n//         }]\n//     }, {\n//         \"elementType\": \"labels.text.fill\",\n//         \"stylers\": [{\n//             \"saturation\": 36\n//         }, {\n//             \"color\": \"#000000\"\n//         }, {\n//             \"lightness\": 40\n//         }]\n//     }, {\n//         \"elementType\": \"labels.icon\",\n//         \"stylers\": [{\n//             \"visibility\": \"off\"\n//         }]\n//     }, {\n//         \"featureType\": \"transit\",\n//         \"elementType\": \"geometry\",\n//         \"stylers\": [{\n//             \"color\": \"#000000\"\n//         }, {\n//             \"lightness\": 19\n//         }]\n//     }, {\n//         \"featureType\": \"administrative\",\n//         \"elementType\": \"geometry.fill\",\n//         \"stylers\": [{\n//             \"color\": \"#000000\"\n//         }, {\n//             \"lightness\": 20\n//         }]\n//     }, {\n//         \"featureType\": \"administrative\",\n//         \"elementType\": \"geometry.stroke\",\n//         \"stylers\": [{\n//             \"color\": \"#000000\"\n//         }, {\n//             \"lightness\": 17\n//         }, {\n//             \"weight\": 1.2\n//         }]\n//     }]\n// };\n\n\n//var map = new google.maps.Map(document.getElementById('map'), myOptions);\n\n","undoManager":{"mark":-2,"position":0,"stack":[[{"start":{"row":343,"column":0},"end":{"row":344,"column":0},"action":"insert","lines":["",""],"id":1}]]},"ace":{"folds":[],"scrolltop":4417.5,"scrollleft":0,"selection":{"start":{"row":327,"column":0},"end":{"row":341,"column":44},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":314,"state":"start","mode":"ace/mode/javascript"}},"timestamp":1480439719048}