<?php

// server side test function for cl01 searchbar
// returns test array in JSON

$RESPONSES = array
(
    array
    (
        "searchTerm" => "Rev test"
    ),
    array
    (
        "searchTerm" => "Something else"
    ),
    array
    (
        "searchTerm" => "completely different"
    ),
    array
    (
        "searchTerm" => "Reverse test"
    ),
    array
    (
        "searchTerm" => "Reserved testing algorithm",
        "byline" => "Run Reserved Testing Tool",
        "infoPane" => array
        (
            "command" => array
            (
                "commandName" => "clotho.run",
                "commandArguments" => array
                (
                    array
                    (
                        "linkText" => "5506-Tn5",
                        "linkURL" => "http://www.mylink.com"
                    ),
                    array
                    (
                        "linkText" => "98235",
                        "linkURL" => "http://www.myOtherlink.com"
                    ),
                    array
                    (
                        "linkText" => "butthead",
                        "linkURL" => "http://www.myOtherlink.com"
                    )
                )
            ),
            "executeButton" => array
            (
                "linkText" => "Execute",
                "linkURL" => "#"
            ),
            "infoContent" => array
            (
                array // start infoBlock
                (
                    "header" => array
                    (
                        "title" => "Reserved Testing Tool",
                        "author" => array
                        (
                            "linkText" => "Joe Shmoe",
                            "linkURL" => "http://www.mylink.com",
                            "avatar" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkFGODU3NTI4NkQzNjExRTJBODUzQTZCOTc3NEQ5NEQ5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjgwODNBOTg2NkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QUY4NTc1MjY2RDM2MTFFMkE4NTNBNkI5Nzc0RDk0RDkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QUY4NTc1Mjc2RDM2MTFFMkE4NTNBNkI5Nzc0RDk0RDkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAeAB4DAREAAhEBAxEB/8QAfwABAAIDAAAAAAAAAAAAAAAABwQGAgMFAQADAQEBAAAAAAAAAAAAAAABAgQDBQAQAAEDAwMCBAUFAAAAAAAAAAECAwQREgUAMQYhE0FxIhRRYTIkB0JSM0MVEQACAgIBAgUFAAAAAAAAAAAAARECIQMSMUHwUWFxIqEyEyME/9oADAMBAAIRAxEAPwCgYvNw8FAEmMELzcokMSl0UIqAooNiT/aoj6jsNtZujfsdnZZWcNxVfVivxLh+IlYtmXOQJMqUA4t9/wBalV8blV1He7kxbjojl834xExrIyGJWqHJbJsdZ9B6dfDw6aOu+YZ5rkshY7mIUieznY7bLeZhKUJoLYLLl4LaJIR9IcStYqNrqHVvBxHYnmvSceMFuy3CIjv4lGZQGhk4swSZK0/yIjugtJbWNxQ2qHxrXQ1bPnAP7fva7IQcdNwuOwmHyLinEPzY7aQttLjqTa3Wlqeg1DZNtryZTSvL1wRuVycKnhuSy2No53m1qW6q4BTlLAaL2oTTbTUTd0mLb4psLEcPhR/xKvKvKQnITpPuIylGjhjtENkJG5/Us+VddHn+yDmxgQ+UcfnyMUxDwjrbX+yluNKeTQB2MEJtU4OocpT5FPgdQ69kOX2Onti9fU6vFeOZfE4tvDzpDWTjRVfbhaCkoH7agnoK9NZbL8rSsB1visMz5lxQ57EewW8uPFQQrsx6IBKeoBqDUa9ru62kF0rKGUuTxzHvSIaXH5C/asLhMxC4lQQ0potKQkEUSTfsNbLdaBVpURAmY1SBi8Z6AU9gBNCK9ot9SPLU1uoV1N2IXM7jgebou49w1G9fPSoNiTPUoNOURUfGo0yEQJOCWPyU32i4WyfubbrQLVW309O+1dU4/GPmT//Z"
                        )
                    ),
                    "content" => array
                    (
                        "header" => array
                        (
                            // generated with http://webcodertools.com/imagetobase64converter
                            "icon" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkIxNUQ0RjgxNjFBMzExRTJCNUE0REZBRDM4NDFGMzc1IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkIxNUQ0RjgyNjFBMzExRTJCNUE0REZBRDM4NDFGMzc1Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QjE1RDRGN0Y2MUEzMTFFMkI1QTRERkFEMzg0MUYzNzUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QjE1RDRGODA2MUEzMTFFMkI1QTRERkFEMzg0MUYzNzUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAnACcDAREAAhEBAxEB/8QAegABAQADAQAAAAAAAAAAAAAABQQBAgMGAQEBAQEBAAAAAAAAAAAAAAADBAIBABAAAgEDAwIGAQQDAAAAAAAAAQIDEQQFACESMQZBUSIyExRhgcEjB0JishEAAgIBBAICAwAAAAAAAAAAAQIAEQMhMRIEQVGBImEyFP/aAAwDAQACEQMRAD8AIzvfHeucytzdyZSWBTIeMcbMqIpJ4oiqV6AdTqbNn4mpd1+tzFk6SFMx3Zz4Lm7k9d+Ulf8AvRf0n1H/AIl9yjG5Du1nFsc5dKCwBqzk+o0P+esnskeJodJT5lt7e92W8rKueuTQV3L/AJ/3/GuDtn1OnoL7M44f+wu8MfJd2bZOV/s200Lc2ZlIlidVcciSrI2+x1Sma1J9SPJ1+LhfcJxKy3X2DGOR51I28jqfOpZtPUs6rqianzKLue1htoniiZbpqoybnk48hux89tbVAAG2htlYll/a9p5bK3GfaWCGO0d3VxLFCg/kfieVKKSdIvAksDCcZAApG20uxPfsuazl2138WPtIIGJtZWAYMNieTcSTU7imp8mAKorU3KcPbLub0UCZmvojdxTc1MPxhg+1OIDEmvlrWIHiwmeww5qfEitcosMTxMSkry+mQHiApBBr56YJ9ruA2Sk418xqLKWNvFHNPC0MtPjjm5c0Zevj7T4n99EQuXQHaMpbALIsGDZ7uK9wPcOPyFv8V6VX5BApr/HyowLL7W8Px46QYVKlRBbsOrhjrOX9nT9t5mS3zeJdVvQsf2VCMpcEb89gOadCfHXOurqaO013GxuAyn7SJLyKaIotuY4oIuITl7lKsSK66uMi9dTMvlDAaUBELC4xsl4v3rz4zC/yJEyj4y3EqCzU677DprteZ5WGxP5mO58a0uHhs7edZZzKGtniPpbY+4nYDj+dEgCEsY+YnIoUbzXsjGMtrd2U1vEtxdHnLLNVXYxn2qz+nr147nTlwdpIMbAURVxeOzxioksptoFgb1yHxKgqQK+mh66EcibuVniFqhp5hEk+IN9HFDNztUHGRipCqpJrTapFNKFr5k7NdC9BI+6cJBhc/e45L63v4IZD9a/sZY7mKWIkmNqxs1Gp1B3B1uoNyawuLuNT9b52B9vGFmA3FaUNOtP11loiX4icmVu2toYobW5SVWbhL8Tli9fVt46BUpyblL5TwAqE3skkkwa4eVSwOzREUankSOv404krRDtvDW+TXIl7yGzhsrK4upJbmWOJ5DFE7RwwxswaR5HAUKtddmTP/9k=",
                            "title" => "Reserved Testing Tool",
                            "rateUp" => "12",
                            "rateDown" => "3"
                        ),
                        "content" => array
                        (
                            array
                            (
                                "Times Used" => "35",
                                "Successful Executions" => "27",
                                "Description" => "Aenean lacinia bibendum nulla sed consectetur. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Maecenas faucibus mollis interdum. Etiam porta sem malesuada magna mollis euismod."
                            )
                        )
                    )
                ), // end infoBlock
                array // start infoBlock
                (
                    "header" => array
                    (
                        "title" => "pBca 1256",
                        "author" => array
                        (
                            "linkText" => "Chris Anderson",
                            "linkURL" => "http://www.mylink.com",
                            "avatar" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjgwODNBOThENkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjgwODNBOThFNkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODA4M0E5OEI2RDNFMTFFMkE4NTNBNkI5Nzc0RDk0RDkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6ODA4M0E5OEM2RDNFMTFFMkE4NTNBNkI5Nzc0RDk0RDkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAeAB4DAREAAhEBAxEB/8QAfgABAQADAQAAAAAAAAAAAAAABwYCAwUIAQEBAQEBAAAAAAAAAAAAAAADBAIAARAAAgECBQIDBgcAAAAAAAAAAQIDEQQAIRITBTEGcRQHQbEiMhYIYYGRoVIjFREAAgEDAwMFAAAAAAAAAAAAAAERIQISMUEDYXEEUSIyUhP/2gAMAwEAAhEDEQA/APMSo7lVQamY0AwRSlIqdjemlnewR3F9FuM3zblWWh/ioI/fAu5sss8ZRUseX9A+I5KwDceptLtOkiU0t+DDp+mNLI67ht7Af9Lc19Q/Tvln/wBbf8t5enxa6+6mfhjeRJi5g2dqXVpDdSm4jMjMo2iEV6UNT1IoTgue1uIK/ButVzkcOx4OSNnDILzZRjURGJX0qTVRUmpyxlMpulujFrjTy6waS9vdJTOqtA/5U3F92HToS35JgPLeavuQhdVYyK+hostQbyjDTWtPaM8ZigWXv0Ij067VF9bXfMPcKIrNC09oVbUY9aoGVh7dTdKeJGO5HsJ43G3X1GWx40wS8A9vJI9uZtM7oC1FpkHpU0wS2LGsZqXY5SGzbkuW1SNZwMkaxMAijUwSuYrSrZ4RXRLDfFlCnUIeShubX7h+J5SeGAWt+ZJLRY1oxSOKWJt0UqZdamjeGdBjexK+N/pBB+nT8+l9EeFjMqqG1qSoRren9hfWQumnWuBcz1H4oxpoJMpSJYLuzE9xDIp18bAZUaKlflkAKMrEfDnUeHTlAss78Sc1PZSy848lpw4mTRbTa3csKbe64BNCelR165497nlvTUz5+17cbv8A7Ya4vGTuBLW48kmkmKRTDNuZhNoANXrnhdgH819j/9k="
                        )
                    ),
                    "content" => array
                    (
                        "header" => array
                        (
                            "icon" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjA1MUQ3RkI4NjFDNjExRTJCNUE0REZBRDM4NDFGMzc1IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjA1MUQ3RkI5NjFDNjExRTJCNUE0REZBRDM4NDFGMzc1Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDUxRDdGQjY2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDUxRDdGQjc2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAnACcDAREAAhEBAxEB/8QAgwAAAQUBAAAAAAAAAAAAAAAABgECAwQFBwEAAgMBAQAAAAAAAAAAAAAAAQMAAgUEBhAAAgIBAwMDAwMFAAAAAAAAAQIDBBEAEgUhMQZhMhNBIhRRcbGRocEjFREAAgIBAwIEBwEAAAAAAAAAAAERAgMhEgQxMkFRsSJhcZETIxQFFf/aAAwDAQACEQMRAD8A6TQvXOU8i/Ktys7uZtqknaqgdFUdgBry7vbI22UDKrWXAGnY8QUhV5vjKlbFgK6l2QZAIBySMkg41u4OOrUShPQDaRHRTgrlJ5JQqynLSJuKui9huAPQ9CdUy8DG+5ElPoc8uWJuE8ipTUf9MPLfJWv1lJEcqPhQzL23qJPdjOsfj30vWfavR6BqJ49fX/rKSe3zfxrjpaEwILLVtdgspLIjRj7tkjqAB2baCFOP20x5mlKCZcs/HfjI9e1LFadiZIyyyIpU5ZsMM4PTb1/jXb/putZDJW5Wlzlpakg5gwQxP8k8CIFMqYI2OTv6dc9MadT+rFXNdWvoVepjeSX0k5zhCPbHOSf23RjWdx37b/Jeoag7xPLKnJsQfaJf8a5XpVlUwkHkUcUTvM4WJQTIW7bcdf7aorPoSQMo+bVBysTzZWmX6Fj2XP27j9duRnTf12LVtQtt+RElgHGMaU22MkxrdlHqryB6uLUSBj9FWROg/Tr1OtXFRLjN+LQxdoC0OSZLsz5PQS5/qNctqaMUQ+R8jzV6klOjtCOczyM4X7R2XB9ep0ePWlXNirHXqcMvBx8dCwE8C7opT0zIfdu9H1KZHv3PoCBeK5Lk0oLXvFfmiG1XVw2UHtz6jtoZaV3TUKCN7LHwb5s/d+UDn1Ey60KL8EfBj12glzXFy8J5Hf46KzDyNdPlNe9TlSeKSMsCp3RlsNj3A9QdKy40p1Qpoofk2uxjkx9CVPbSdqKj2uWc4EMuR3O06mxeZIITdtDJWByMdtraKovMMBxRqvd8Legs0cK14prtq7Ofhh3xgyR14jJtMsskqom1M9z6Z0q0X24nwHLtg//Z",
                            "title" => "pBca 1256",
                            "rateUp" => "98",
                            "rateDown" => "54"
                        ),
                        "content" => array
                        (
                            array
                            (
                                "Times Used" => "77",
                                "Successful Executions" => "2",
                                "And what else" => "more beer",
                                "Description" => "Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.."
                            )
                        )
                    )
                ), // end infoBlock
                array // start infoBlock
                (
                    "header" => array
                    (
                        "title" => "Commodo Bibendum Parturient",
                        "author" => array
                        (
                            "linkText" => "Lisa Bland",
                            "linkURL" => "http://www.mylink.com",
                            "avatar" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjgwODNBOTg5NkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjgwODNBOThBNkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODA4M0E5ODc2RDNFMTFFMkE4NTNBNkI5Nzc0RDk0RDkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6ODA4M0E5ODg2RDNFMTFFMkE4NTNBNkI5Nzc0RDk0RDkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAeAB4DAREAAhEBAxEB/8QAgQABAQADAAAAAAAAAAAAAAAABgcEBQgBAAIDAQEAAAAAAAAAAAAAAAMEAgUGAQcQAAIBAgUCBQMFAAAAAAAAAAECAxEEACExBQYSE0FhgSIVUUIHcZGhMhQRAAEDAgUCBgMAAAAAAAAAAAEAEQISAyExQQQFUYFhkbHRIjJyEyP/2gAMAwEAAhEDEQA/AOmLm4jt7aSd8kjUsfQVxC7cEImRyAUgHXNV9tC835jN8jcOLTqaW6ZSKlQaLGh8CdPIYyXHVXbhnLXFMxg6WXnHNp2WwHxEa21qntaBDRaaVJNc8F5fZCUKxmEcwDLQd+YP0mmZoGJ9vplXGWoDJdXjkzlOP7gw17La+Ypj0fki23n+KBDNRLhHGQb1N1ud17UsnWU29aEMhqiF28TU1y0xV8ZZjGD6lPRhIB1l3w3+3n3C13C0Y2rBhaXSVaNqD7hqp+mH71p4kdVMSfBETO1BUAGlRGQaE+Rxjf0f0o8Us2Ktn5W5C+2bPDbRNR7yQCQUqTGNQPXGn53cGNsWxnP0QbYxdR3aN55PZ7i1jYQQXViHcyxSdKyIzPVZI31HsOY0yxzjblVkKwth4v0TXcOUOLGbuuMgcq5HDZmWUjEKXpvBdJLmilYnH3AkKXC/1pQLnpriknYbcA9fZLn7On35Gl5LPN179B/kYhuxEGVlCeHSULD+a4S5CV83gbwaWg0QAzYIfbDkLMW2Zo03FYws6TKGDLTJl91Qaa5/rhrYSuB6RVHth5osDLRGdyfnD9z5KNYoRWpjzB/YnFwMkX5aowDyepcLXaySGjBFAeoZknOtfpjsqMH+2iEauy//2Q=="
                        )
                    ),
                    "content" => array
                    (
                        "header" => array
                        (
                            "icon" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjA1MUQ3RkJDNjFDNjExRTJCNUE0REZBRDM4NDFGMzc1IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjA1MUQ3RkJENjFDNjExRTJCNUE0REZBRDM4NDFGMzc1Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDUxRDdGQkE2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDUxRDdGQkI2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAnACcDAREAAhEBAxEB/8QAigAAAQUBAAAAAAAAAAAAAAAABgECAwQFBwEAAgMBAQAAAAAAAAAAAAAAAQMAAgQFBhAAAgIBAgQEBAILAAAAAAAAAQIDBBEABSExQRIiMhMGkdEUFbEH8FFhcYHBQoIjUxcRAAICAQEHAgcAAAAAAAAAAAABEQIDITFBURIiMgSxE2FxgUIjBRX/2gAMAwEAAhEDEQA/AOk0L1zdPcX1VuVndzN2oSe1VA4Ko5ADXl3e2RttlAyq1lwBp+PGGCSHddvr0pWmUSrGW8AUMeZ+A/WddzBhTqqtIj01IaMOx3dvaxIFy5JbtbDKBy7sEjPX+Oq5fCo+5QTbsOd3LEuye4qUtHMUO7epWv1lJEcqPhQzLy71EnmxnXGwX71PSvR6EqJ7evr92U5/3fhrJS0JgQd190iVO5mACgkk9AOOtFMpYHI5qcsolgsT1qsrtH4ysg7m4gkMoYA54gnWqv7FprgSSDeNt3hjVWtuwr1K8nfPXijEfqpggo3nwMnPDGn/ANVQ5rLa2lWuGhi+5LyPvmyEeWOck/u7oxrl+O+m/wAl6hqDu07sE3NyD5RL/LWV6VZVMrSfmPYuVvpuxYPWft7g5P8AjXzHpgcPx032mthR3Gt+Y8MtRdvaMLCB4bBcls587DHXrqPC4Jzof/0yx69WnIiO0pEMkvechwe1sjGM8jovC4kPMXLllHrLuBOXFqJFY/0osicAOmTz1sxUS8Zve0OXaA1Dc2S7K+TwEufiNZbU0YoShM/3GfcrIAmYtHWTmBEOAJB4BiP0zqZH0qq+pWDY+7pkAqnLB8I+WkQwmBYvW4fcHfWjD0biZsEBcRSpyf8AuHDWmqTx6vVACd7Ln2P6+fH9UDn9omXW6i/BHwY9doIbpQm2f3Df25Z470UXqiK7UkWeGRCwKsHjLLkjmOYPDSclEp1FMqfU2eRjkx0PYeXw0nlRUe1yzyEMuevhb5anKgkJuWRnEDngeHa3y1ZVXEAbVa0tr2X9vWSON445rtm1K3pwKYsyJAkj9qySySKkYRMnjnpro0ovbidw/wC0/9k=",
                            "title" => "Commodo Bibendum Parturient",
                            "rateUp" => "6",
                            "rateDown" => "56"
                        ),
                        "content" => array
                        (
                            array
                            (
                                "Times Used" => "66",
                                "Description" => "Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Curabitur blandit tempus porttitor."
                            )
                        )
                    )
                ), // end infoBlock
                array // start infoBlock
                (
                    "header" => array
                    (
                        "title" => "Commodo Bibendum Parturient 2",
                        "author" => array
                        (
                            "linkText" => "Augusta Priviledge",
                            "linkURL" => "http://www.mylink.com",
                            "avatar" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkY3MUE3QjdFNkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkY3MUE3QjdGNkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODA4M0E5OEY2RDNFMTFFMkE4NTNBNkI5Nzc0RDk0RDkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6ODA4M0E5OTA2RDNFMTFFMkE4NTNBNkI5Nzc0RDk0RDkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAeAB4DAREAAhEBAxEB/8QAfAAAAgMBAAAAAAAAAAAAAAAABQcDBAYIAQADAQEBAQAAAAAAAAAAAAACBAUDAAEGEAACAQMEAQIFBQAAAAAAAAABAgMREgQAIQUGMSITUWEyFAdxkbFiFREAAQMEAQMFAQAAAAAAAAAAAQARAiExEgMEQSIyUXGB4UJS/9oADAMBAAIRAxEAPwAJzfYuy9w6o0fI5EMPHNL9/FFFKWyZI43KpBIG9PoqPn8RpHIRLdUTSmFns+eHsi4TZUIw8vCiXGfOhNrZSp6YTJGQy3IuxYfVtoJ7cbVTUOIJXRDrH4lfkInyBlmaaCQ3Y8htR0KkhbkV5FNfG2/jauujyRKlkG3hY+yBRS9qPIz9DvYQDKQfY2yUMgJNbBvS036YIo6SMT4oj+MOOl5pMrjxl/bPisJMvJdBIhhJG0X0Ornc18HWO9gMjZN6dbFk0Z/x511uJRI5Wjyo4mf7qoQhyQI6oQfT5P7aRyEbqiCZGitYi4cc2LCMxV5WeAwY8Vg9qSdPUs1ooS4NGrdsfhrOOwmrWutJaRYlc6p27sY7xJzQzpP9ZspYjl0BkoD7AFtdvQbba+Nq6t49vwordyg4Dnee61zr5XFZFucSccx0vjY1toVNLt/GvZAGNbJrGrp/4aryHEjC5pnikkRWkMTstHO7IrLQ0u185LYRJxVV4wDMryc/HxsMOQIFtxSoSZkqVEimgvND6lW40rohGeLriYEt1SczOkQYvfOP5dfck4bkMqTNZQBdFNHdk+039GKbH4apx5b6iP0B9KeeI2wfyVB26HpkXeeNbqc6TxvMhyURWEEclwKiIsFDD9P5rpgmR1nKhZZw8w3qmbjz5ZE65mORCCCGLJQ7bjzXzqEQFXCsZcubSe+EXWr7wnYXWWi22pLfTT5U0fd1WXa4ZZ6bI5RsDHkbFK5CyN7cFyG+rEfUDQAJU6ICLmtERJX/2Q=="
                        )
                    ),
                    "content" => array
                    (
                        "header" => array
                        (
                            "icon" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjA1MUQ3RkJDNjFDNjExRTJCNUE0REZBRDM4NDFGMzc1IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjA1MUQ3RkJENjFDNjExRTJCNUE0REZBRDM4NDFGMzc1Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDUxRDdGQkE2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDUxRDdGQkI2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAnACcDAREAAhEBAxEB/8QAigAAAQUBAAAAAAAAAAAAAAAABgECAwQFBwEAAgMBAQAAAAAAAAAAAAAAAQMAAgQFBhAAAgIBAgQEBAILAAAAAAAAAQIDBBEABSExQRIiMhMGkdEUFbEH8FFhcYHBQoIjUxcRAAICAQEHAgcAAAAAAAAAAAABEQIDITFBURIiMgSxE2FxgUIjBRX/2gAMAwEAAhEDEQA/AOk0L1zdPcX1VuVndzN2oSe1VA4Ko5ADXl3e2RttlAyq1lwBp+PGGCSHddvr0pWmUSrGW8AUMeZ+A/WddzBhTqqtIj01IaMOx3dvaxIFy5JbtbDKBy7sEjPX+Oq5fCo+5QTbsOd3LEuye4qUtHMUO7epWv1lJEcqPhQzLy71EnmxnXGwX71PSvR6EqJ7evr92U5/3fhrJS0JgQd190iVO5mACgkk9AOOtFMpYHI5qcsolgsT1qsrtH4ysg7m4gkMoYA54gnWqv7FprgSSDeNt3hjVWtuwr1K8nfPXijEfqpggo3nwMnPDGn/ANVQ5rLa2lWuGhi+5LyPvmyEeWOck/u7oxrl+O+m/wAl6hqDu07sE3NyD5RL/LWV6VZVMrSfmPYuVvpuxYPWft7g5P8AjXzHpgcPx032mthR3Gt+Y8MtRdvaMLCB4bBcls587DHXrqPC4Jzof/0yx69WnIiO0pEMkvechwe1sjGM8jovC4kPMXLllHrLuBOXFqJFY/0osicAOmTz1sxUS8Zve0OXaA1Dc2S7K+TwEufiNZbU0YoShM/3GfcrIAmYtHWTmBEOAJB4BiP0zqZH0qq+pWDY+7pkAqnLB8I+WkQwmBYvW4fcHfWjD0biZsEBcRSpyf8AuHDWmqTx6vVACd7Ln2P6+fH9UDn9omXW6i/BHwY9doIbpQm2f3Df25Z470UXqiK7UkWeGRCwKsHjLLkjmOYPDSclEp1FMqfU2eRjkx0PYeXw0nlRUe1yzyEMuevhb5anKgkJuWRnEDngeHa3y1ZVXEAbVa0tr2X9vWSON445rtm1K3pwKYsyJAkj9qySySKkYRMnjnpro0ovbidw/wC0/9k=",
                            "title" => "Commodo Bibendum Parturient",
                            "rateUp" => "16",
                            "rateDown" => "51"
                        ),
                        "content" => array
                        (
                            array
                            (
                                "Times Used" => "72",
                                "Description" => "Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Curabitur blandit tempus porttitor."
                            )
                        )
                    )
                ) // end infoBlock
            )
        )
    ),
    array
    (
        "searchTerm" => "Reverse phone lookup"
    ),
    array
    (
        "searchTerm" => "Revolutionary exercise regimen"
    ),
    array
    (
        "searchTerm" => "Revengeful angel"
    ),
    array
    (
        "searchTerm" => "Reverse cTest"
    ),
    array
    (
        "searchTerm" => "Reverse complement pBca1256"
    ),
    array
    (
        "searchTerm" => "Reverse complement this"
    ),
    array
    (
        "searchTerm" => "Reverse complement 2939-235-2"
    ),
    array
    (
        "searchTerm" => "Reverse compatibility of nanogel c."
    ),
    array
    (
        "searchTerm" => "Reverse complement plasmid",
        "byline" => "Run Reverse Complement Tool",
        "infoPane" => array
        (
            "command" => array
            (
                "commandName" => "clotho.run",
                "commandArguments" => array
                (
                    array
                    (
                        "linkText" => "9299d9-2n3",
                        "linkURL" => "http://www.mylink.com"
                    ),
                    array
                    (
                        "linkText" => "9239d9302",
                        "linkURL" => "http://www.myOtherlink.com"
                    )
                )
            ),
            "executeButton" => array
            (
                "linkText" => "Execute",
                "linkURL" => "#"
            ),
            "infoContent" => array
            (
                array // start infoBlock
                (
                    "header" => array
                    (
                        "title" => "Reverse Complement Tool",
                        "author" => array
                        (
                            "linkText" => "Joe Shmoe",
                            "linkURL" => "http://www.mylink.com",
                            "avatar" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkFGODU3NTI4NkQzNjExRTJBODUzQTZCOTc3NEQ5NEQ5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjgwODNBOTg2NkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QUY4NTc1MjY2RDM2MTFFMkE4NTNBNkI5Nzc0RDk0RDkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QUY4NTc1Mjc2RDM2MTFFMkE4NTNBNkI5Nzc0RDk0RDkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAeAB4DAREAAhEBAxEB/8QAfwABAAIDAAAAAAAAAAAAAAAABwQGAgMFAQADAQEBAAAAAAAAAAAAAAABAgQDBQAQAAEDAwMCBAUFAAAAAAAAAAECAwQREgUAMQYhE0FxIhRRYTIkB0JSM0MVEQACAgIBAgUFAAAAAAAAAAAAARECIQMSMUHwUWFxIqEyEyME/9oADAMBAAIRAxEAPwCgYvNw8FAEmMELzcokMSl0UIqAooNiT/aoj6jsNtZujfsdnZZWcNxVfVivxLh+IlYtmXOQJMqUA4t9/wBalV8blV1He7kxbjojl834xExrIyGJWqHJbJsdZ9B6dfDw6aOu+YZ5rkshY7mIUieznY7bLeZhKUJoLYLLl4LaJIR9IcStYqNrqHVvBxHYnmvSceMFuy3CIjv4lGZQGhk4swSZK0/yIjugtJbWNxQ2qHxrXQ1bPnAP7fva7IQcdNwuOwmHyLinEPzY7aQttLjqTa3Wlqeg1DZNtryZTSvL1wRuVycKnhuSy2No53m1qW6q4BTlLAaL2oTTbTUTd0mLb4psLEcPhR/xKvKvKQnITpPuIylGjhjtENkJG5/Us+VddHn+yDmxgQ+UcfnyMUxDwjrbX+yluNKeTQB2MEJtU4OocpT5FPgdQ69kOX2Onti9fU6vFeOZfE4tvDzpDWTjRVfbhaCkoH7agnoK9NZbL8rSsB1visMz5lxQ57EewW8uPFQQrsx6IBKeoBqDUa9ru62kF0rKGUuTxzHvSIaXH5C/asLhMxC4lQQ0potKQkEUSTfsNbLdaBVpURAmY1SBi8Z6AU9gBNCK9ot9SPLU1uoV1N2IXM7jgebou49w1G9fPSoNiTPUoNOURUfGo0yEQJOCWPyU32i4WyfubbrQLVW309O+1dU4/GPmT//Z"
                        )
                    ),
                    "content" => array
                    (
                        "header" => array
                        (
                            // generated with http://webcodertools.com/imagetobase64converter
                            "icon" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkIxNUQ0RjgxNjFBMzExRTJCNUE0REZBRDM4NDFGMzc1IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkIxNUQ0RjgyNjFBMzExRTJCNUE0REZBRDM4NDFGMzc1Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QjE1RDRGN0Y2MUEzMTFFMkI1QTRERkFEMzg0MUYzNzUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QjE1RDRGODA2MUEzMTFFMkI1QTRERkFEMzg0MUYzNzUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAnACcDAREAAhEBAxEB/8QAegABAQADAQAAAAAAAAAAAAAABQQBAgMGAQEBAQEBAAAAAAAAAAAAAAADBAIBABAAAgEDAwIGAQQDAAAAAAAAAQIDEQQFACESMQZBUSIyExRhgcEjB0JishEAAgIBBAICAwAAAAAAAAAAAQIAEQMhMRIEQVGBImEyFP/aAAwDAQACEQMRAD8AIzvfHeucytzdyZSWBTIeMcbMqIpJ4oiqV6AdTqbNn4mpd1+tzFk6SFMx3Zz4Lm7k9d+Ulf8AvRf0n1H/AIl9yjG5Du1nFsc5dKCwBqzk+o0P+esnskeJodJT5lt7e92W8rKueuTQV3L/AJ/3/GuDtn1OnoL7M44f+wu8MfJd2bZOV/s200Lc2ZlIlidVcciSrI2+x1Sma1J9SPJ1+LhfcJxKy3X2DGOR51I28jqfOpZtPUs6rqianzKLue1htoniiZbpqoybnk48hux89tbVAAG2htlYll/a9p5bK3GfaWCGO0d3VxLFCg/kfieVKKSdIvAksDCcZAApG20uxPfsuazl2138WPtIIGJtZWAYMNieTcSTU7imp8mAKorU3KcPbLub0UCZmvojdxTc1MPxhg+1OIDEmvlrWIHiwmeww5qfEitcosMTxMSkry+mQHiApBBr56YJ9ruA2Sk418xqLKWNvFHNPC0MtPjjm5c0Zevj7T4n99EQuXQHaMpbALIsGDZ7uK9wPcOPyFv8V6VX5BApr/HyowLL7W8Px46QYVKlRBbsOrhjrOX9nT9t5mS3zeJdVvQsf2VCMpcEb89gOadCfHXOurqaO013GxuAyn7SJLyKaIotuY4oIuITl7lKsSK66uMi9dTMvlDAaUBELC4xsl4v3rz4zC/yJEyj4y3EqCzU677DprteZ5WGxP5mO58a0uHhs7edZZzKGtniPpbY+4nYDj+dEgCEsY+YnIoUbzXsjGMtrd2U1vEtxdHnLLNVXYxn2qz+nr147nTlwdpIMbAURVxeOzxioksptoFgb1yHxKgqQK+mh66EcibuVniFqhp5hEk+IN9HFDNztUHGRipCqpJrTapFNKFr5k7NdC9BI+6cJBhc/e45L63v4IZD9a/sZY7mKWIkmNqxs1Gp1B3B1uoNyawuLuNT9b52B9vGFmA3FaUNOtP11loiX4icmVu2toYobW5SVWbhL8Tli9fVt46BUpyblL5TwAqE3skkkwa4eVSwOzREUankSOv404krRDtvDW+TXIl7yGzhsrK4upJbmWOJ5DFE7RwwxswaR5HAUKtddmTP/9k=",
                            "title" => "Reverse Complement Tool",
                            "rateUp" => "12",
                            "rateDown" => "3"
                        ),
                        "content" => array
                        (
                            array
                            (
                                "Times Used" => "35",
                                "Successful Executions" => "27",
                                "Description" => "Aenean lacinia bibendum nulla sed consectetur. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Maecenas faucibus mollis interdum. Etiam porta sem malesuada magna mollis euismod."
                            )
                        )
                    )
                ), // end infoBlock

                array // start infoBlock
                (
                    "header" => array
                    (
                        "title" => "pBca 1256",
                        "author" => array
                        (
                            "linkText" => "Chris Anderson",
                            "linkURL" => "http://www.mylink.com",
                            "avatar" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjgwODNBOThENkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjgwODNBOThFNkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODA4M0E5OEI2RDNFMTFFMkE4NTNBNkI5Nzc0RDk0RDkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6ODA4M0E5OEM2RDNFMTFFMkE4NTNBNkI5Nzc0RDk0RDkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAeAB4DAREAAhEBAxEB/8QAfgABAQADAQAAAAAAAAAAAAAABwYCAwUIAQEBAQEBAAAAAAAAAAAAAAADBAIAARAAAgECBQIDBgcAAAAAAAAAAQIDEQQAIRITBTEGcRQHQbEiMhYIYYGRoVIjFREAAgEDAwMFAAAAAAAAAAAAAAERIQISMUEDYXEEUSIyUhP/2gAMAwEAAhEDEQA/APMSo7lVQamY0AwRSlIqdjemlnewR3F9FuM3zblWWh/ioI/fAu5sss8ZRUseX9A+I5KwDceptLtOkiU0t+DDp+mNLI67ht7Af9Lc19Q/Tvln/wBbf8t5enxa6+6mfhjeRJi5g2dqXVpDdSm4jMjMo2iEV6UNT1IoTgue1uIK/ButVzkcOx4OSNnDILzZRjURGJX0qTVRUmpyxlMpulujFrjTy6waS9vdJTOqtA/5U3F92HToS35JgPLeavuQhdVYyK+hostQbyjDTWtPaM8ZigWXv0Ij067VF9bXfMPcKIrNC09oVbUY9aoGVh7dTdKeJGO5HsJ43G3X1GWx40wS8A9vJI9uZtM7oC1FpkHpU0wS2LGsZqXY5SGzbkuW1SNZwMkaxMAijUwSuYrSrZ4RXRLDfFlCnUIeShubX7h+J5SeGAWt+ZJLRY1oxSOKWJt0UqZdamjeGdBjexK+N/pBB+nT8+l9EeFjMqqG1qSoRren9hfWQumnWuBcz1H4oxpoJMpSJYLuzE9xDIp18bAZUaKlflkAKMrEfDnUeHTlAss78Sc1PZSy848lpw4mTRbTa3csKbe64BNCelR165497nlvTUz5+17cbv8A7Ya4vGTuBLW48kmkmKRTDNuZhNoANXrnhdgH819j/9k="
                        )
                    ),
                    "content" => array
                    (
                        "header" => array
                        (
                            "icon" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjA1MUQ3RkI4NjFDNjExRTJCNUE0REZBRDM4NDFGMzc1IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjA1MUQ3RkI5NjFDNjExRTJCNUE0REZBRDM4NDFGMzc1Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDUxRDdGQjY2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDUxRDdGQjc2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAnACcDAREAAhEBAxEB/8QAgwAAAQUBAAAAAAAAAAAAAAAABgECAwQFBwEAAgMBAQAAAAAAAAAAAAAAAQMAAgUEBhAAAgIBAwMDAwMFAAAAAAAAAQIDBBEAEgUhMQZhMhNBIhRRcbGRocEjFREAAgIBAwIEBwEAAAAAAAAAAAERAgMhEgQxMkFRsSJhcZETIxQFFf/aAAwDAQACEQMRAD8A6TQvXOU8i/Ktys7uZtqknaqgdFUdgBry7vbI22UDKrWXAGnY8QUhV5vjKlbFgK6l2QZAIBySMkg41u4OOrUShPQDaRHRTgrlJ5JQqynLSJuKui9huAPQ9CdUy8DG+5ElPoc8uWJuE8ipTUf9MPLfJWv1lJEcqPhQzL23qJPdjOsfj30vWfavR6BqJ49fX/rKSe3zfxrjpaEwILLVtdgspLIjRj7tkjqAB2baCFOP20x5mlKCZcs/HfjI9e1LFadiZIyyyIpU5ZsMM4PTb1/jXb/putZDJW5Wlzlpakg5gwQxP8k8CIFMqYI2OTv6dc9MadT+rFXNdWvoVepjeSX0k5zhCPbHOSf23RjWdx37b/Jeoag7xPLKnJsQfaJf8a5XpVlUwkHkUcUTvM4WJQTIW7bcdf7aorPoSQMo+bVBysTzZWmX6Fj2XP27j9duRnTf12LVtQtt+RElgHGMaU22MkxrdlHqryB6uLUSBj9FWROg/Tr1OtXFRLjN+LQxdoC0OSZLsz5PQS5/qNctqaMUQ+R8jzV6klOjtCOczyM4X7R2XB9ep0ePWlXNirHXqcMvBx8dCwE8C7opT0zIfdu9H1KZHv3PoCBeK5Lk0oLXvFfmiG1XVw2UHtz6jtoZaV3TUKCN7LHwb5s/d+UDn1Ey60KL8EfBj12glzXFy8J5Hf46KzDyNdPlNe9TlSeKSMsCp3RlsNj3A9QdKy40p1Qpoofk2uxjkx9CVPbSdqKj2uWc4EMuR3O06mxeZIITdtDJWByMdtraKovMMBxRqvd8Legs0cK14prtq7Ofhh3xgyR14jJtMsskqom1M9z6Z0q0X24nwHLtg//Z",
                            "title" => "pBca 1256",
                            "rateUp" => "98",
                            "rateDown" => "54"
                        ),
                        "content" => array
                        (
                            array
                            (
                                "Times Used" => "77",
                                "Successful Executions" => "2",
                                "And what else" => "more beer",
                                "Description" => "Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.."
                            )
                        )
                    )
                ), // end infoBlock
                array // start infoBlock
                (
                    "header" => array
                    (
                        "title" => "Commodo Bibendum Parturient",
                        "author" => array
                        (
                            "linkText" => "Lisa Bland",
                            "linkURL" => "http://www.mylink.com",
                            "avatar" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjgwODNBOTg5NkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjgwODNBOThBNkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODA4M0E5ODc2RDNFMTFFMkE4NTNBNkI5Nzc0RDk0RDkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6ODA4M0E5ODg2RDNFMTFFMkE4NTNBNkI5Nzc0RDk0RDkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAeAB4DAREAAhEBAxEB/8QAgQABAQADAAAAAAAAAAAAAAAABgcEBQgBAAIDAQEAAAAAAAAAAAAAAAMEAgUGAQcQAAIBAgUCBQMFAAAAAAAAAAECAxEEACExBQYSE0FhgSIVUUIHcZGhMhQRAAEDAgUCBgMAAAAAAAAAAAEAEQISAyExQQQFUYFhkbHRIjJyEyP/2gAMAwEAAhEDEQA/AOmLm4jt7aSd8kjUsfQVxC7cEImRyAUgHXNV9tC835jN8jcOLTqaW6ZSKlQaLGh8CdPIYyXHVXbhnLXFMxg6WXnHNp2WwHxEa21qntaBDRaaVJNc8F5fZCUKxmEcwDLQd+YP0mmZoGJ9vplXGWoDJdXjkzlOP7gw17La+Ypj0fki23n+KBDNRLhHGQb1N1ud17UsnWU29aEMhqiF28TU1y0xV8ZZjGD6lPRhIB1l3w3+3n3C13C0Y2rBhaXSVaNqD7hqp+mH71p4kdVMSfBETO1BUAGlRGQaE+Rxjf0f0o8Us2Ktn5W5C+2bPDbRNR7yQCQUqTGNQPXGn53cGNsWxnP0QbYxdR3aN55PZ7i1jYQQXViHcyxSdKyIzPVZI31HsOY0yxzjblVkKwth4v0TXcOUOLGbuuMgcq5HDZmWUjEKXpvBdJLmilYnH3AkKXC/1pQLnpriknYbcA9fZLn7On35Gl5LPN179B/kYhuxEGVlCeHSULD+a4S5CV83gbwaWg0QAzYIfbDkLMW2Zo03FYws6TKGDLTJl91Qaa5/rhrYSuB6RVHth5osDLRGdyfnD9z5KNYoRWpjzB/YnFwMkX5aowDyepcLXaySGjBFAeoZknOtfpjsqMH+2iEauy//2Q=="
                        )
                    ),
                    "content" => array
                    (
                        "header" => array
                        (
                            "icon" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjA1MUQ3RkJDNjFDNjExRTJCNUE0REZBRDM4NDFGMzc1IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjA1MUQ3RkJENjFDNjExRTJCNUE0REZBRDM4NDFGMzc1Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDUxRDdGQkE2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDUxRDdGQkI2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAnACcDAREAAhEBAxEB/8QAigAAAQUBAAAAAAAAAAAAAAAABgECAwQFBwEAAgMBAQAAAAAAAAAAAAAAAQMAAgQFBhAAAgIBAgQEBAILAAAAAAAAAQIDBBEABSExQRIiMhMGkdEUFbEH8FFhcYHBQoIjUxcRAAICAQEHAgcAAAAAAAAAAAABEQIDITFBURIiMgSxE2FxgUIjBRX/2gAMAwEAAhEDEQA/AOk0L1zdPcX1VuVndzN2oSe1VA4Ko5ADXl3e2RttlAyq1lwBp+PGGCSHddvr0pWmUSrGW8AUMeZ+A/WddzBhTqqtIj01IaMOx3dvaxIFy5JbtbDKBy7sEjPX+Oq5fCo+5QTbsOd3LEuye4qUtHMUO7epWv1lJEcqPhQzLy71EnmxnXGwX71PSvR6EqJ7evr92U5/3fhrJS0JgQd190iVO5mACgkk9AOOtFMpYHI5qcsolgsT1qsrtH4ysg7m4gkMoYA54gnWqv7FprgSSDeNt3hjVWtuwr1K8nfPXijEfqpggo3nwMnPDGn/ANVQ5rLa2lWuGhi+5LyPvmyEeWOck/u7oxrl+O+m/wAl6hqDu07sE3NyD5RL/LWV6VZVMrSfmPYuVvpuxYPWft7g5P8AjXzHpgcPx032mthR3Gt+Y8MtRdvaMLCB4bBcls587DHXrqPC4Jzof/0yx69WnIiO0pEMkvechwe1sjGM8jovC4kPMXLllHrLuBOXFqJFY/0osicAOmTz1sxUS8Zve0OXaA1Dc2S7K+TwEufiNZbU0YoShM/3GfcrIAmYtHWTmBEOAJB4BiP0zqZH0qq+pWDY+7pkAqnLB8I+WkQwmBYvW4fcHfWjD0biZsEBcRSpyf8AuHDWmqTx6vVACd7Ln2P6+fH9UDn9omXW6i/BHwY9doIbpQm2f3Df25Z470UXqiK7UkWeGRCwKsHjLLkjmOYPDSclEp1FMqfU2eRjkx0PYeXw0nlRUe1yzyEMuevhb5anKgkJuWRnEDngeHa3y1ZVXEAbVa0tr2X9vWSON445rtm1K3pwKYsyJAkj9qySySKkYRMnjnpro0ovbidw/wC0/9k=",
                            "title" => "Commodo Bibendum Parturient",
                            "rateUp" => "6",
                            "rateDown" => "56"
                        ),
                        "content" => array
                        (
                            array
                            (
                                "Times Used" => "66",
                                "Description" => "Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Curabitur blandit tempus porttitor."
                            )
                        )
                    )
                ) // end infoBlock
            )
        )
    ),
    array
    (
        "searchTerm" => "Reverse singular molecule",
        "byline" => "Run Reverse Singular Tool",
        "infoPane" => array
        (
            "command" => array
            (
                "commandName" => "clotho.run",
                "commandArguments" => array
                (
                    array
                    (
                        "linkText" => "9299d9-2n3",
                        "linkURL" => "http://www.mylink.com"
                    )
                )
            ),
            "executeButton" => array
            (
                "linkText" => "Execute",
                "linkURL" => "#"
            ),
            "infoContent" => array
            (
                array // start infoBlock
                (
                    "header" => array
                    (
                        "title" => "Reverse Singular Tool",
                        "author" => array
                        (
                            "linkText" => "Billy Billmore",
                            "linkURL" => "http://www.mylink.com",
                            "avatar" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkFGODU3NTI4NkQzNjExRTJBODUzQTZCOTc3NEQ5NEQ5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjgwODNBOTg2NkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QUY4NTc1MjY2RDM2MTFFMkE4NTNBNkI5Nzc0RDk0RDkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QUY4NTc1Mjc2RDM2MTFFMkE4NTNBNkI5Nzc0RDk0RDkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAeAB4DAREAAhEBAxEB/8QAfwABAAIDAAAAAAAAAAAAAAAABwQGAgMFAQADAQEBAAAAAAAAAAAAAAABAgQDBQAQAAEDAwMCBAUFAAAAAAAAAAECAwQREgUAMQYhE0FxIhRRYTIkB0JSM0MVEQACAgIBAgUFAAAAAAAAAAAAARECIQMSMUHwUWFxIqEyEyME/9oADAMBAAIRAxEAPwCgYvNw8FAEmMELzcokMSl0UIqAooNiT/aoj6jsNtZujfsdnZZWcNxVfVivxLh+IlYtmXOQJMqUA4t9/wBalV8blV1He7kxbjojl834xExrIyGJWqHJbJsdZ9B6dfDw6aOu+YZ5rkshY7mIUieznY7bLeZhKUJoLYLLl4LaJIR9IcStYqNrqHVvBxHYnmvSceMFuy3CIjv4lGZQGhk4swSZK0/yIjugtJbWNxQ2qHxrXQ1bPnAP7fva7IQcdNwuOwmHyLinEPzY7aQttLjqTa3Wlqeg1DZNtryZTSvL1wRuVycKnhuSy2No53m1qW6q4BTlLAaL2oTTbTUTd0mLb4psLEcPhR/xKvKvKQnITpPuIylGjhjtENkJG5/Us+VddHn+yDmxgQ+UcfnyMUxDwjrbX+yluNKeTQB2MEJtU4OocpT5FPgdQ69kOX2Onti9fU6vFeOZfE4tvDzpDWTjRVfbhaCkoH7agnoK9NZbL8rSsB1visMz5lxQ57EewW8uPFQQrsx6IBKeoBqDUa9ru62kF0rKGUuTxzHvSIaXH5C/asLhMxC4lQQ0potKQkEUSTfsNbLdaBVpURAmY1SBi8Z6AU9gBNCK9ot9SPLU1uoV1N2IXM7jgebou49w1G9fPSoNiTPUoNOURUfGo0yEQJOCWPyU32i4WyfubbrQLVW309O+1dU4/GPmT//Z"
                        )
                    ),
                    "content" => array
                    (
                        "header" => array
                        (
                            // generated with http://webcodertools.com/imagetobase64converter
                            "icon" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkIxNUQ0RjgxNjFBMzExRTJCNUE0REZBRDM4NDFGMzc1IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkIxNUQ0RjgyNjFBMzExRTJCNUE0REZBRDM4NDFGMzc1Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QjE1RDRGN0Y2MUEzMTFFMkI1QTRERkFEMzg0MUYzNzUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QjE1RDRGODA2MUEzMTFFMkI1QTRERkFEMzg0MUYzNzUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAnACcDAREAAhEBAxEB/8QAegABAQADAQAAAAAAAAAAAAAABQQBAgMGAQEBAQEBAAAAAAAAAAAAAAADBAIBABAAAgEDAwIGAQQDAAAAAAAAAQIDEQQFACESMQZBUSIyExRhgcEjB0JishEAAgIBBAICAwAAAAAAAAAAAQIAEQMhMRIEQVGBImEyFP/aAAwDAQACEQMRAD8AIzvfHeucytzdyZSWBTIeMcbMqIpJ4oiqV6AdTqbNn4mpd1+tzFk6SFMx3Zz4Lm7k9d+Ulf8AvRf0n1H/AIl9yjG5Du1nFsc5dKCwBqzk+o0P+esnskeJodJT5lt7e92W8rKueuTQV3L/AJ/3/GuDtn1OnoL7M44f+wu8MfJd2bZOV/s200Lc2ZlIlidVcciSrI2+x1Sma1J9SPJ1+LhfcJxKy3X2DGOR51I28jqfOpZtPUs6rqianzKLue1htoniiZbpqoybnk48hux89tbVAAG2htlYll/a9p5bK3GfaWCGO0d3VxLFCg/kfieVKKSdIvAksDCcZAApG20uxPfsuazl2138WPtIIGJtZWAYMNieTcSTU7imp8mAKorU3KcPbLub0UCZmvojdxTc1MPxhg+1OIDEmvlrWIHiwmeww5qfEitcosMTxMSkry+mQHiApBBr56YJ9ruA2Sk418xqLKWNvFHNPC0MtPjjm5c0Zevj7T4n99EQuXQHaMpbALIsGDZ7uK9wPcOPyFv8V6VX5BApr/HyowLL7W8Px46QYVKlRBbsOrhjrOX9nT9t5mS3zeJdVvQsf2VCMpcEb89gOadCfHXOurqaO013GxuAyn7SJLyKaIotuY4oIuITl7lKsSK66uMi9dTMvlDAaUBELC4xsl4v3rz4zC/yJEyj4y3EqCzU677DprteZ5WGxP5mO58a0uHhs7edZZzKGtniPpbY+4nYDj+dEgCEsY+YnIoUbzXsjGMtrd2U1vEtxdHnLLNVXYxn2qz+nr147nTlwdpIMbAURVxeOzxioksptoFgb1yHxKgqQK+mh66EcibuVniFqhp5hEk+IN9HFDNztUHGRipCqpJrTapFNKFr5k7NdC9BI+6cJBhc/e45L63v4IZD9a/sZY7mKWIkmNqxs1Gp1B3B1uoNyawuLuNT9b52B9vGFmA3FaUNOtP11loiX4icmVu2toYobW5SVWbhL8Tli9fVt46BUpyblL5TwAqE3skkkwa4eVSwOzREUankSOv404krRDtvDW+TXIl7yGzhsrK4upJbmWOJ5DFE7RwwxswaR5HAUKtddmTP/9k=",
                            "title" => "Reverse Singular Tool",
                            "rateUp" => "45",
                            "rateDown" => "15"
                        ),
                        "content" => array
                        (
                            array
                            (
                                "Times Used" => "895",
                                "Successful Executions" => "801",
                                "Description" => "Aenean lacinia bibendum nulla sed consectetur. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Maecenas faucibus mollis interdum. Etiam porta sem malesuada magna mollis euismod."
                            )
                        )
                    )
                ), // end infoBlock
                array // start infoBlock
                (
                    "header" => array
                    (
                        "title" => "Fringilla Sem",
                        "author" => array
                        (
                            "linkText" => "Mona Lisa",
                            "linkURL" => "http://www.mylink.com",
                            "avatar" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjgwODNBOTg5NkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjgwODNBOThBNkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODA4M0E5ODc2RDNFMTFFMkE4NTNBNkI5Nzc0RDk0RDkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6ODA4M0E5ODg2RDNFMTFFMkE4NTNBNkI5Nzc0RDk0RDkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAeAB4DAREAAhEBAxEB/8QAgQABAQADAAAAAAAAAAAAAAAABgcEBQgBAAIDAQEAAAAAAAAAAAAAAAMEAgUGAQcQAAIBAgUCBQMFAAAAAAAAAAECAxEEACExBQYSE0FhgSIVUUIHcZGhMhQRAAEDAgUCBgMAAAAAAAAAAAEAEQISAyExQQQFUYFhkbHRIjJyEyP/2gAMAwEAAhEDEQA/AOmLm4jt7aSd8kjUsfQVxC7cEImRyAUgHXNV9tC835jN8jcOLTqaW6ZSKlQaLGh8CdPIYyXHVXbhnLXFMxg6WXnHNp2WwHxEa21qntaBDRaaVJNc8F5fZCUKxmEcwDLQd+YP0mmZoGJ9vplXGWoDJdXjkzlOP7gw17La+Ypj0fki23n+KBDNRLhHGQb1N1ud17UsnWU29aEMhqiF28TU1y0xV8ZZjGD6lPRhIB1l3w3+3n3C13C0Y2rBhaXSVaNqD7hqp+mH71p4kdVMSfBETO1BUAGlRGQaE+Rxjf0f0o8Us2Ktn5W5C+2bPDbRNR7yQCQUqTGNQPXGn53cGNsWxnP0QbYxdR3aN55PZ7i1jYQQXViHcyxSdKyIzPVZI31HsOY0yxzjblVkKwth4v0TXcOUOLGbuuMgcq5HDZmWUjEKXpvBdJLmilYnH3AkKXC/1pQLnpriknYbcA9fZLn7On35Gl5LPN179B/kYhuxEGVlCeHSULD+a4S5CV83gbwaWg0QAzYIfbDkLMW2Zo03FYws6TKGDLTJl91Qaa5/rhrYSuB6RVHth5osDLRGdyfnD9z5KNYoRWpjzB/YnFwMkX5aowDyepcLXaySGjBFAeoZknOtfpjsqMH+2iEauy//2Q=="
                        )
                    ),
                    "content" => array
                    (
                        "header" => array
                        (
                            "icon" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjA1MUQ3RkJDNjFDNjExRTJCNUE0REZBRDM4NDFGMzc1IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjA1MUQ3RkJENjFDNjExRTJCNUE0REZBRDM4NDFGMzc1Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDUxRDdGQkE2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDUxRDdGQkI2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAnACcDAREAAhEBAxEB/8QAigAAAQUBAAAAAAAAAAAAAAAABgECAwQFBwEAAgMBAQAAAAAAAAAAAAAAAQMAAgQFBhAAAgIBAgQEBAILAAAAAAAAAQIDBBEABSExQRIiMhMGkdEUFbEH8FFhcYHBQoIjUxcRAAICAQEHAgcAAAAAAAAAAAABEQIDITFBURIiMgSxE2FxgUIjBRX/2gAMAwEAAhEDEQA/AOk0L1zdPcX1VuVndzN2oSe1VA4Ko5ADXl3e2RttlAyq1lwBp+PGGCSHddvr0pWmUSrGW8AUMeZ+A/WddzBhTqqtIj01IaMOx3dvaxIFy5JbtbDKBy7sEjPX+Oq5fCo+5QTbsOd3LEuye4qUtHMUO7epWv1lJEcqPhQzLy71EnmxnXGwX71PSvR6EqJ7evr92U5/3fhrJS0JgQd190iVO5mACgkk9AOOtFMpYHI5qcsolgsT1qsrtH4ysg7m4gkMoYA54gnWqv7FprgSSDeNt3hjVWtuwr1K8nfPXijEfqpggo3nwMnPDGn/ANVQ5rLa2lWuGhi+5LyPvmyEeWOck/u7oxrl+O+m/wAl6hqDu07sE3NyD5RL/LWV6VZVMrSfmPYuVvpuxYPWft7g5P8AjXzHpgcPx032mthR3Gt+Y8MtRdvaMLCB4bBcls587DHXrqPC4Jzof/0yx69WnIiO0pEMkvechwe1sjGM8jovC4kPMXLllHrLuBOXFqJFY/0osicAOmTz1sxUS8Zve0OXaA1Dc2S7K+TwEufiNZbU0YoShM/3GfcrIAmYtHWTmBEOAJB4BiP0zqZH0qq+pWDY+7pkAqnLB8I+WkQwmBYvW4fcHfWjD0biZsEBcRSpyf8AuHDWmqTx6vVACd7Ln2P6+fH9UDn9omXW6i/BHwY9doIbpQm2f3Df25Z470UXqiK7UkWeGRCwKsHjLLkjmOYPDSclEp1FMqfU2eRjkx0PYeXw0nlRUe1yzyEMuevhb5anKgkJuWRnEDngeHa3y1ZVXEAbVa0tr2X9vWSON445rtm1K3pwKYsyJAkj9qySySKkYRMnjnpro0ovbidw/wC0/9k=",
                            "title" => "Fringilla Sem",
                            "rateUp" => "16",
                            "rateDown" => "77"
                        ),
                        "content" => array
                        (
                            array
                            (
                                "Times Used" => "99",
                                "Description" => "Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Curabitur blandit tempus porttitor."
                            )
                        )
                    )
                ) // end infoBlock
            )
        )
    )
); // end RESPONSES


$AUTHORS = array
(
    array
    (
        "name" => "Joe Shmoe",
        "content" => array
        (
            "email" => "joe@mydomain.com",
            "avatar" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkFGODU3NTI4NkQzNjExRTJBODUzQTZCOTc3NEQ5NEQ5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjgwODNBOTg2NkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QUY4NTc1MjY2RDM2MTFFMkE4NTNBNkI5Nzc0RDk0RDkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QUY4NTc1Mjc2RDM2MTFFMkE4NTNBNkI5Nzc0RDk0RDkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAeAB4DAREAAhEBAxEB/8QAfwABAAIDAAAAAAAAAAAAAAAABwQGAgMFAQADAQEBAAAAAAAAAAAAAAABAgQDBQAQAAEDAwMCBAUFAAAAAAAAAAECAwQREgUAMQYhE0FxIhRRYTIkB0JSM0MVEQACAgIBAgUFAAAAAAAAAAAAARECIQMSMUHwUWFxIqEyEyME/9oADAMBAAIRAxEAPwCgYvNw8FAEmMELzcokMSl0UIqAooNiT/aoj6jsNtZujfsdnZZWcNxVfVivxLh+IlYtmXOQJMqUA4t9/wBalV8blV1He7kxbjojl834xExrIyGJWqHJbJsdZ9B6dfDw6aOu+YZ5rkshY7mIUieznY7bLeZhKUJoLYLLl4LaJIR9IcStYqNrqHVvBxHYnmvSceMFuy3CIjv4lGZQGhk4swSZK0/yIjugtJbWNxQ2qHxrXQ1bPnAP7fva7IQcdNwuOwmHyLinEPzY7aQttLjqTa3Wlqeg1DZNtryZTSvL1wRuVycKnhuSy2No53m1qW6q4BTlLAaL2oTTbTUTd0mLb4psLEcPhR/xKvKvKQnITpPuIylGjhjtENkJG5/Us+VddHn+yDmxgQ+UcfnyMUxDwjrbX+yluNKeTQB2MEJtU4OocpT5FPgdQ69kOX2Onti9fU6vFeOZfE4tvDzpDWTjRVfbhaCkoH7agnoK9NZbL8rSsB1visMz5lxQ57EewW8uPFQQrsx6IBKeoBqDUa9ru62kF0rKGUuTxzHvSIaXH5C/asLhMxC4lQQ0potKQkEUSTfsNbLdaBVpURAmY1SBi8Z6AU9gBNCK9ot9SPLU1uoV1N2IXM7jgebou49w1G9fPSoNiTPUoNOURUfGo0yEQJOCWPyU32i4WyfubbrQLVW309O+1dU4/GPmT//Z",
            "description" => "Nulla vitae elit libero, a pharetra augue. Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit."
        )
    ),
    array
    (
        "name" => "Chris Anderson",
        "content" => array
        (
            "email" => "chris@mydomain.com",
            "avatar" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjgwODNBOThENkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjgwODNBOThFNkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODA4M0E5OEI2RDNFMTFFMkE4NTNBNkI5Nzc0RDk0RDkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6ODA4M0E5OEM2RDNFMTFFMkE4NTNBNkI5Nzc0RDk0RDkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAeAB4DAREAAhEBAxEB/8QAfgABAQADAQAAAAAAAAAAAAAABwYCAwUIAQEBAQEBAAAAAAAAAAAAAAADBAIAARAAAgECBQIDBgcAAAAAAAAAAQIDEQQAIRITBTEGcRQHQbEiMhYIYYGRoVIjFREAAgEDAwMFAAAAAAAAAAAAAAERIQISMUEDYXEEUSIyUhP/2gAMAwEAAhEDEQA/APMSo7lVQamY0AwRSlIqdjemlnewR3F9FuM3zblWWh/ioI/fAu5sss8ZRUseX9A+I5KwDceptLtOkiU0t+DDp+mNLI67ht7Af9Lc19Q/Tvln/wBbf8t5enxa6+6mfhjeRJi5g2dqXVpDdSm4jMjMo2iEV6UNT1IoTgue1uIK/ButVzkcOx4OSNnDILzZRjURGJX0qTVRUmpyxlMpulujFrjTy6waS9vdJTOqtA/5U3F92HToS35JgPLeavuQhdVYyK+hostQbyjDTWtPaM8ZigWXv0Ij067VF9bXfMPcKIrNC09oVbUY9aoGVh7dTdKeJGO5HsJ43G3X1GWx40wS8A9vJI9uZtM7oC1FpkHpU0wS2LGsZqXY5SGzbkuW1SNZwMkaxMAijUwSuYrSrZ4RXRLDfFlCnUIeShubX7h+J5SeGAWt+ZJLRY1oxSOKWJt0UqZdamjeGdBjexK+N/pBB+nT8+l9EeFjMqqG1qSoRren9hfWQumnWuBcz1H4oxpoJMpSJYLuzE9xDIp18bAZUaKlflkAKMrEfDnUeHTlAss78Sc1PZSy848lpw4mTRbTa3csKbe64BNCelR165497nlvTUz5+17cbv8A7Ya4vGTuBLW48kmkmKRTDNuZhNoANXrnhdgH819j/9k=",
            "description" => "Nulla vitae elit libero, a pharetra augue. Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit."
        )
    ),
    array
    (
        "name" => "Lisa Bland",
        "content" => array
        (
            "email" => "lisa@mydomain.com",
            "avatar" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjgwODNBOTg5NkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjgwODNBOThBNkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODA4M0E5ODc2RDNFMTFFMkE4NTNBNkI5Nzc0RDk0RDkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6ODA4M0E5ODg2RDNFMTFFMkE4NTNBNkI5Nzc0RDk0RDkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAeAB4DAREAAhEBAxEB/8QAgQABAQADAAAAAAAAAAAAAAAABgcEBQgBAAIDAQEAAAAAAAAAAAAAAAMEAgUGAQcQAAIBAgUCBQMFAAAAAAAAAAECAxEEACExBQYSE0FhgSIVUUIHcZGhMhQRAAEDAgUCBgMAAAAAAAAAAAEAEQISAyExQQQFUYFhkbHRIjJyEyP/2gAMAwEAAhEDEQA/AOmLm4jt7aSd8kjUsfQVxC7cEImRyAUgHXNV9tC835jN8jcOLTqaW6ZSKlQaLGh8CdPIYyXHVXbhnLXFMxg6WXnHNp2WwHxEa21qntaBDRaaVJNc8F5fZCUKxmEcwDLQd+YP0mmZoGJ9vplXGWoDJdXjkzlOP7gw17La+Ypj0fki23n+KBDNRLhHGQb1N1ud17UsnWU29aEMhqiF28TU1y0xV8ZZjGD6lPRhIB1l3w3+3n3C13C0Y2rBhaXSVaNqD7hqp+mH71p4kdVMSfBETO1BUAGlRGQaE+Rxjf0f0o8Us2Ktn5W5C+2bPDbRNR7yQCQUqTGNQPXGn53cGNsWxnP0QbYxdR3aN55PZ7i1jYQQXViHcyxSdKyIzPVZI31HsOY0yxzjblVkKwth4v0TXcOUOLGbuuMgcq5HDZmWUjEKXpvBdJLmilYnH3AkKXC/1pQLnpriknYbcA9fZLn7On35Gl5LPN179B/kYhuxEGVlCeHSULD+a4S5CV83gbwaWg0QAzYIfbDkLMW2Zo03FYws6TKGDLTJl91Qaa5/rhrYSuB6RVHth5osDLRGdyfnD9z5KNYoRWpjzB/YnFwMkX5aowDyepcLXaySGjBFAeoZknOtfpjsqMH+2iEauy//2Q==",
            "description" => "Nulla vitae elit libero, a pharetra augue. Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit."
        )
    ),
    array
    (
        "name" => "Augusta Priviledge",
        "content" => array
        (
            "email" => "augusta@mydomain.com",
            "avatar" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJCNjQ0RkE1NjFGQzExRTJCNUE0REZBRDM4NDFGMzc1IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJCNjQ0RkE2NjFGQzExRTJCNUE0REZBRDM4NDFGMzc1Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QkI2NDRGQTM2MUZDMTFFMkI1QTRERkFEMzg0MUYzNzUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QkI2NDRGQTQ2MUZDMTFFMkI1QTRERkFEMzg0MUYzNzUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAyACgDAREAAhEBAxEB/8QAhAAAAgMAAwAAAAAAAAAAAAAABAUDBgcAAQIBAAMBAQEAAAAAAAAAAAAAAAIDBAEABRAAAgECBAMFBQgDAAAAAAAAAQIDEQQAMRIFITIGQVFhIhOBkbFCM3GhcpJDNDUHFBUWEQACAgEFAAIDAAAAAAAAAAAAARECITFBEgMEURMyQhT/2gAMAwEAAhEDEQA/AALzlOJ2MQtOFhwRNDM6kpGxXvAwMsL62c2oMm82AYEE3EXA8PnGDqsg2TRsXUNze2uxzXNjEJr2Fne2hbJ5FhcqtBTPFb0wIUbmYX8ipEzngFFScTWGVyKbHckacFlqpOWEciulIRd9nu9vmChQpPaOGDGQMZ9q26ZFnVFEsTB4zw4MpqD78EgbKTLpNy6svP7iu726dv8AV2DNAkbsRHHHJEKekvaxrUn3nFnVY8/spDgYdRTtHZhVzldY6+BNT8MSdugfUpYmnsN1CGWygMoFKUoT7ASMLok3kss3GNS4dJbRM13cxzzK0qKDEQCCeHzA91cMfGYOXJrIX07ebyJp7e4t3Fv6jRhnUqyMp7a5g9hGDtSAFeZUAX9idFW+67NLukF3LabptcikSxHSDGyMTq/LgbdnCjsthFq8rpFc6otriQQXELkekaOhPlIJBqR4UwHbUPzWiUNdgvnjlUjlUAkeGF1RXyUEVvumyPvsplsLwes9RfRF9KFTqFdJ1U1eGGQjuTg0Kx3mKS1B1hycn7x2Y5NmNYPFhcmSK8lvrdF2fWHuJpatqZUeqlSKaFQV9uCq8OfxJfQkkn+wVF0LtF7tN3FoCXJAMFxUu6cNVGU0HHHrLypo8z74ZTP+J6ntWmW3jivIVAMcsTBJGRhUExtT7ODYk7PI08FlPUmsklhtO8akFzs1GkqsczFFIIGda1wleW/wP/qpGpOu071Y6AbZ/SeZFLVGlUZvMdQPdWmNr5rfAFvSti1bmtvufTdzYwBljuElhjZuHnaJ4wG7RxatcUrpxBJbsbcs7mv2iuknEpijurOjAD9SEla+4jHqrCINWM0mZLK2ETBZEjABPjQkHCW02NjAPJJdm8tmnRWQuVLcKHWpHxwNl8HVb3I7pp9vTQGST1XJSIjTpTh5ajPzduASe5uUL7u6H+IZIlMcuossAyaR10kDwyOCrWMnS2EdU/yNly/r8nLmn39+KNhe55sv435sz+P2eOE7jQy7/Y2/N9WHm5uYYyxlSPqD93b55Plll83hgbaGlf3P6Vnz/VP08uX4YKuhh//Z",
            "description" => "Nulla vitae elit libero, a pharetra augue. Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit."
        )
    ),
    array
    (
        "name" => "Billy Billmore",
        "content" => array
        (
            "email" => "billy@mydomain.com",
            "avatar" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkFGODU3NTI4NkQzNjExRTJBODUzQTZCOTc3NEQ5NEQ5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjgwODNBOTg2NkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QUY4NTc1MjY2RDM2MTFFMkE4NTNBNkI5Nzc0RDk0RDkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QUY4NTc1Mjc2RDM2MTFFMkE4NTNBNkI5Nzc0RDk0RDkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAeAB4DAREAAhEBAxEB/8QAfwABAAIDAAAAAAAAAAAAAAAABwQGAgMFAQADAQEBAAAAAAAAAAAAAAABAgQDBQAQAAEDAwMCBAUFAAAAAAAAAAECAwQREgUAMQYhE0FxIhRRYTIkB0JSM0MVEQACAgIBAgUFAAAAAAAAAAAAARECIQMSMUHwUWFxIqEyEyME/9oADAMBAAIRAxEAPwCgYvNw8FAEmMELzcokMSl0UIqAooNiT/aoj6jsNtZujfsdnZZWcNxVfVivxLh+IlYtmXOQJMqUA4t9/wBalV8blV1He7kxbjojl834xExrIyGJWqHJbJsdZ9B6dfDw6aOu+YZ5rkshY7mIUieznY7bLeZhKUJoLYLLl4LaJIR9IcStYqNrqHVvBxHYnmvSceMFuy3CIjv4lGZQGhk4swSZK0/yIjugtJbWNxQ2qHxrXQ1bPnAP7fva7IQcdNwuOwmHyLinEPzY7aQttLjqTa3Wlqeg1DZNtryZTSvL1wRuVycKnhuSy2No53m1qW6q4BTlLAaL2oTTbTUTd0mLb4psLEcPhR/xKvKvKQnITpPuIylGjhjtENkJG5/Us+VddHn+yDmxgQ+UcfnyMUxDwjrbX+yluNKeTQB2MEJtU4OocpT5FPgdQ69kOX2Onti9fU6vFeOZfE4tvDzpDWTjRVfbhaCkoH7agnoK9NZbL8rSsB1visMz5lxQ57EewW8uPFQQrsx6IBKeoBqDUa9ru62kF0rKGUuTxzHvSIaXH5C/asLhMxC4lQQ0potKQkEUSTfsNbLdaBVpURAmY1SBi8Z6AU9gBNCK9ot9SPLU1uoV1N2IXM7jgebou49w1G9fPSoNiTPUoNOURUfGo0yEQJOCWPyU32i4WyfubbrQLVW309O+1dU4/GPmT//Z",
            "description" => "Nulla vitae elit libero, a pharetra augue. Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit."
        )
    ),
    array
    (
        "name" => "Mona Lisa",
        "content" => array
        (
            "email" => "mona@mydomain.com",
            "avatar" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjgwODNBOTg5NkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjgwODNBOThBNkQzRTExRTJBODUzQTZCOTc3NEQ5NEQ5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODA4M0E5ODc2RDNFMTFFMkE4NTNBNkI5Nzc0RDk0RDkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6ODA4M0E5ODg2RDNFMTFFMkE4NTNBNkI5Nzc0RDk0RDkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAeAB4DAREAAhEBAxEB/8QAgQABAQADAAAAAAAAAAAAAAAABgcEBQgBAAIDAQEAAAAAAAAAAAAAAAMEAgUGAQcQAAIBAgUCBQMFAAAAAAAAAAECAxEEACExBQYSE0FhgSIVUUIHcZGhMhQRAAEDAgUCBgMAAAAAAAAAAAEAEQISAyExQQQFUYFhkbHRIjJyEyP/2gAMAwEAAhEDEQA/AOmLm4jt7aSd8kjUsfQVxC7cEImRyAUgHXNV9tC835jN8jcOLTqaW6ZSKlQaLGh8CdPIYyXHVXbhnLXFMxg6WXnHNp2WwHxEa21qntaBDRaaVJNc8F5fZCUKxmEcwDLQd+YP0mmZoGJ9vplXGWoDJdXjkzlOP7gw17La+Ypj0fki23n+KBDNRLhHGQb1N1ud17UsnWU29aEMhqiF28TU1y0xV8ZZjGD6lPRhIB1l3w3+3n3C13C0Y2rBhaXSVaNqD7hqp+mH71p4kdVMSfBETO1BUAGlRGQaE+Rxjf0f0o8Us2Ktn5W5C+2bPDbRNR7yQCQUqTGNQPXGn53cGNsWxnP0QbYxdR3aN55PZ7i1jYQQXViHcyxSdKyIzPVZI31HsOY0yxzjblVkKwth4v0TXcOUOLGbuuMgcq5HDZmWUjEKXpvBdJLmilYnH3AkKXC/1pQLnpriknYbcA9fZLn7On35Gl5LPN179B/kYhuxEGVlCeHSULD+a4S5CV83gbwaWg0QAzYIfbDkLMW2Zo03FYws6TKGDLTJl91Qaa5/rhrYSuB6RVHth5osDLRGdyfnD9z5KNYoRWpjzB/YnFwMkX5aowDyepcLXaySGjBFAeoZknOtfpjsqMH+2iEauy//2Q==",
            "description" => "Nulla vitae elit libero, a pharetra augue. Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit."
        )
    )
); // end of AUTHORS


$CONTENT = array
(
    array
    (
        "title" => "Reverse Complement Tool",
        "content" => array
        (
            "header" => array
            (
                // generated with http://webcodertools.com/imagetobase64converter
                "icon" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkIxNUQ0RjgxNjFBMzExRTJCNUE0REZBRDM4NDFGMzc1IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkIxNUQ0RjgyNjFBMzExRTJCNUE0REZBRDM4NDFGMzc1Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QjE1RDRGN0Y2MUEzMTFFMkI1QTRERkFEMzg0MUYzNzUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QjE1RDRGODA2MUEzMTFFMkI1QTRERkFEMzg0MUYzNzUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAnACcDAREAAhEBAxEB/8QAegABAQADAQAAAAAAAAAAAAAABQQBAgMGAQEBAQEBAAAAAAAAAAAAAAADBAIBABAAAgEDAwIGAQQDAAAAAAAAAQIDEQQFACESMQZBUSIyExRhgcEjB0JishEAAgIBBAICAwAAAAAAAAAAAQIAEQMhMRIEQVGBImEyFP/aAAwDAQACEQMRAD8AIzvfHeucytzdyZSWBTIeMcbMqIpJ4oiqV6AdTqbNn4mpd1+tzFk6SFMx3Zz4Lm7k9d+Ulf8AvRf0n1H/AIl9yjG5Du1nFsc5dKCwBqzk+o0P+esnskeJodJT5lt7e92W8rKueuTQV3L/AJ/3/GuDtn1OnoL7M44f+wu8MfJd2bZOV/s200Lc2ZlIlidVcciSrI2+x1Sma1J9SPJ1+LhfcJxKy3X2DGOR51I28jqfOpZtPUs6rqianzKLue1htoniiZbpqoybnk48hux89tbVAAG2htlYll/a9p5bK3GfaWCGO0d3VxLFCg/kfieVKKSdIvAksDCcZAApG20uxPfsuazl2138WPtIIGJtZWAYMNieTcSTU7imp8mAKorU3KcPbLub0UCZmvojdxTc1MPxhg+1OIDEmvlrWIHiwmeww5qfEitcosMTxMSkry+mQHiApBBr56YJ9ruA2Sk418xqLKWNvFHNPC0MtPjjm5c0Zevj7T4n99EQuXQHaMpbALIsGDZ7uK9wPcOPyFv8V6VX5BApr/HyowLL7W8Px46QYVKlRBbsOrhjrOX9nT9t5mS3zeJdVvQsf2VCMpcEb89gOadCfHXOurqaO013GxuAyn7SJLyKaIotuY4oIuITl7lKsSK66uMi9dTMvlDAaUBELC4xsl4v3rz4zC/yJEyj4y3EqCzU677DprteZ5WGxP5mO58a0uHhs7edZZzKGtniPpbY+4nYDj+dEgCEsY+YnIoUbzXsjGMtrd2U1vEtxdHnLLNVXYxn2qz+nr147nTlwdpIMbAURVxeOzxioksptoFgb1yHxKgqQK+mh66EcibuVniFqhp5hEk+IN9HFDNztUHGRipCqpJrTapFNKFr5k7NdC9BI+6cJBhc/e45L63v4IZD9a/sZY7mKWIkmNqxs1Gp1B3B1uoNyawuLuNT9b52B9vGFmA3FaUNOtP11loiX4icmVu2toYobW5SVWbhL8Tli9fVt46BUpyblL5TwAqE3skkkwa4eVSwOzREUankSOv404krRDtvDW+TXIl7yGzhsrK4upJbmWOJ5DFE7RwwxswaR5HAUKtddmTP/9k=",
                "title" => "Reverse Complement Tool",
                "rateUp" => "12",
                "rateDown" => "3"
            ),
            "content" => array
            (
                array
                (
                    "Times Used" => "35",
                    "Successful Executions" => "27",
                    "Description" => "Aenean lacinia bibendum nulla sed consectetur. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Maecenas faucibus mollis interdum. Etiam porta sem malesuada magna mollis euismod."
                )
            )
        )
    ),
    array
    (
        "title" => "pBca 1256",
        "content" => array
        (
            "header" => array
            (
                "icon" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjA1MUQ3RkI4NjFDNjExRTJCNUE0REZBRDM4NDFGMzc1IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjA1MUQ3RkI5NjFDNjExRTJCNUE0REZBRDM4NDFGMzc1Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDUxRDdGQjY2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDUxRDdGQjc2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAnACcDAREAAhEBAxEB/8QAgwAAAQUBAAAAAAAAAAAAAAAABgECAwQFBwEAAgMBAQAAAAAAAAAAAAAAAQMAAgUEBhAAAgIBAwMDAwMFAAAAAAAAAQIDBBEAEgUhMQZhMhNBIhRRcbGRocEjFREAAgIBAwIEBwEAAAAAAAAAAAERAgMhEgQxMkFRsSJhcZETIxQFFf/aAAwDAQACEQMRAD8A6TQvXOU8i/Ktys7uZtqknaqgdFUdgBry7vbI22UDKrWXAGnY8QUhV5vjKlbFgK6l2QZAIBySMkg41u4OOrUShPQDaRHRTgrlJ5JQqynLSJuKui9huAPQ9CdUy8DG+5ElPoc8uWJuE8ipTUf9MPLfJWv1lJEcqPhQzL23qJPdjOsfj30vWfavR6BqJ49fX/rKSe3zfxrjpaEwILLVtdgspLIjRj7tkjqAB2baCFOP20x5mlKCZcs/HfjI9e1LFadiZIyyyIpU5ZsMM4PTb1/jXb/putZDJW5Wlzlpakg5gwQxP8k8CIFMqYI2OTv6dc9MadT+rFXNdWvoVepjeSX0k5zhCPbHOSf23RjWdx37b/Jeoag7xPLKnJsQfaJf8a5XpVlUwkHkUcUTvM4WJQTIW7bcdf7aorPoSQMo+bVBysTzZWmX6Fj2XP27j9duRnTf12LVtQtt+RElgHGMaU22MkxrdlHqryB6uLUSBj9FWROg/Tr1OtXFRLjN+LQxdoC0OSZLsz5PQS5/qNctqaMUQ+R8jzV6klOjtCOczyM4X7R2XB9ep0ePWlXNirHXqcMvBx8dCwE8C7opT0zIfdu9H1KZHv3PoCBeK5Lk0oLXvFfmiG1XVw2UHtz6jtoZaV3TUKCN7LHwb5s/d+UDn1Ey60KL8EfBj12glzXFy8J5Hf46KzDyNdPlNe9TlSeKSMsCp3RlsNj3A9QdKy40p1Qpoofk2uxjkx9CVPbSdqKj2uWc4EMuR3O06mxeZIITdtDJWByMdtraKovMMBxRqvd8Legs0cK14prtq7Ofhh3xgyR14jJtMsskqom1M9z6Z0q0X24nwHLtg//Z",
                "title" => "pBca 1256",
                "rateUp" => "98",
                "rateDown" => "54"
            ),
            "content" => array
            (
                array
                (
                    "Times Used" => "77",
                    "Successful Executions" => "2",
                    "And what else" => "more beer",
                    "Description" => "Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.."
                )
            )
        )
    ),
    array
    (
        "title" => "Commodo Bibendum Parturient",
        "content" => array
        (
            "header" => array
            (
                "icon" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjA1MUQ3RkJDNjFDNjExRTJCNUE0REZBRDM4NDFGMzc1IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjA1MUQ3RkJENjFDNjExRTJCNUE0REZBRDM4NDFGMzc1Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDUxRDdGQkE2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDUxRDdGQkI2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAnACcDAREAAhEBAxEB/8QAigAAAQUBAAAAAAAAAAAAAAAABgECAwQFBwEAAgMBAQAAAAAAAAAAAAAAAQMAAgQFBhAAAgIBAgQEBAILAAAAAAAAAQIDBBEABSExQRIiMhMGkdEUFbEH8FFhcYHBQoIjUxcRAAICAQEHAgcAAAAAAAAAAAABEQIDITFBURIiMgSxE2FxgUIjBRX/2gAMAwEAAhEDEQA/AOk0L1zdPcX1VuVndzN2oSe1VA4Ko5ADXl3e2RttlAyq1lwBp+PGGCSHddvr0pWmUSrGW8AUMeZ+A/WddzBhTqqtIj01IaMOx3dvaxIFy5JbtbDKBy7sEjPX+Oq5fCo+5QTbsOd3LEuye4qUtHMUO7epWv1lJEcqPhQzLy71EnmxnXGwX71PSvR6EqJ7evr92U5/3fhrJS0JgQd190iVO5mACgkk9AOOtFMpYHI5qcsolgsT1qsrtH4ysg7m4gkMoYA54gnWqv7FprgSSDeNt3hjVWtuwr1K8nfPXijEfqpggo3nwMnPDGn/ANVQ5rLa2lWuGhi+5LyPvmyEeWOck/u7oxrl+O+m/wAl6hqDu07sE3NyD5RL/LWV6VZVMrSfmPYuVvpuxYPWft7g5P8AjXzHpgcPx032mthR3Gt+Y8MtRdvaMLCB4bBcls587DHXrqPC4Jzof/0yx69WnIiO0pEMkvechwe1sjGM8jovC4kPMXLllHrLuBOXFqJFY/0osicAOmTz1sxUS8Zve0OXaA1Dc2S7K+TwEufiNZbU0YoShM/3GfcrIAmYtHWTmBEOAJB4BiP0zqZH0qq+pWDY+7pkAqnLB8I+WkQwmBYvW4fcHfWjD0biZsEBcRSpyf8AuHDWmqTx6vVACd7Ln2P6+fH9UDn9omXW6i/BHwY9doIbpQm2f3Df25Z470UXqiK7UkWeGRCwKsHjLLkjmOYPDSclEp1FMqfU2eRjkx0PYeXw0nlRUe1yzyEMuevhb5anKgkJuWRnEDngeHa3y1ZVXEAbVa0tr2X9vWSON445rtm1K3pwKYsyJAkj9qySySKkYRMnjnpro0ovbidw/wC0/9k=",
                "title" => "Commodo Bibendum Parturient",
                "rateUp" => "6",
                "rateDown" => "56"
            ),
            "content" => array
            (
                array
                (
                    "Times Used" => "66",
                    "Description" => "Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Curabitur blandit tempus porttitor."
                )
            )
        )
    ),
    array
    (
        "title" => "Commodo Bibendum Parturient 2",
        "content" => array
        (
            "header" => array
            (
                "icon" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjA1MUQ3RkJDNjFDNjExRTJCNUE0REZBRDM4NDFGMzc1IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjA1MUQ3RkJENjFDNjExRTJCNUE0REZBRDM4NDFGMzc1Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDUxRDdGQkE2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDUxRDdGQkI2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAnACcDAREAAhEBAxEB/8QAigAAAQUBAAAAAAAAAAAAAAAABgECAwQFBwEAAgMBAQAAAAAAAAAAAAAAAQMAAgQFBhAAAgIBAgQEBAILAAAAAAAAAQIDBBEABSExQRIiMhMGkdEUFbEH8FFhcYHBQoIjUxcRAAICAQEHAgcAAAAAAAAAAAABEQIDITFBURIiMgSxE2FxgUIjBRX/2gAMAwEAAhEDEQA/AOk0L1zdPcX1VuVndzN2oSe1VA4Ko5ADXl3e2RttlAyq1lwBp+PGGCSHddvr0pWmUSrGW8AUMeZ+A/WddzBhTqqtIj01IaMOx3dvaxIFy5JbtbDKBy7sEjPX+Oq5fCo+5QTbsOd3LEuye4qUtHMUO7epWv1lJEcqPhQzLy71EnmxnXGwX71PSvR6EqJ7evr92U5/3fhrJS0JgQd190iVO5mACgkk9AOOtFMpYHI5qcsolgsT1qsrtH4ysg7m4gkMoYA54gnWqv7FprgSSDeNt3hjVWtuwr1K8nfPXijEfqpggo3nwMnPDGn/ANVQ5rLa2lWuGhi+5LyPvmyEeWOck/u7oxrl+O+m/wAl6hqDu07sE3NyD5RL/LWV6VZVMrSfmPYuVvpuxYPWft7g5P8AjXzHpgcPx032mthR3Gt+Y8MtRdvaMLCB4bBcls587DHXrqPC4Jzof/0yx69WnIiO0pEMkvechwe1sjGM8jovC4kPMXLllHrLuBOXFqJFY/0osicAOmTz1sxUS8Zve0OXaA1Dc2S7K+TwEufiNZbU0YoShM/3GfcrIAmYtHWTmBEOAJB4BiP0zqZH0qq+pWDY+7pkAqnLB8I+WkQwmBYvW4fcHfWjD0biZsEBcRSpyf8AuHDWmqTx6vVACd7Ln2P6+fH9UDn9omXW6i/BHwY9doIbpQm2f3Df25Z470UXqiK7UkWeGRCwKsHjLLkjmOYPDSclEp1FMqfU2eRjkx0PYeXw0nlRUe1yzyEMuevhb5anKgkJuWRnEDngeHa3y1ZVXEAbVa0tr2X9vWSON445rtm1K3pwKYsyJAkj9qySySKkYRMnjnpro0ovbidw/wC0/9k=",
                "title" => "Commodo Bibendum Parturient 2",
                "rateUp" => "6",
                "rateDown" => "56"
            ),
            "content" => array
            (
                array
                (
                    "Times Used" => "66",
                    "What? Again" => "Yup",
                    "Description" => "Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Curabitur blandit tempus porttitor."
                )
            )
        )
    ),
    array
    (
        "title" => "Reverse Singular Tool",
        "content" => array
        (
            "header" => array
            (
                "icon" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjA1MUQ3RkJDNjFDNjExRTJCNUE0REZBRDM4NDFGMzc1IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjA1MUQ3RkJENjFDNjExRTJCNUE0REZBRDM4NDFGMzc1Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDUxRDdGQkE2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDUxRDdGQkI2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAnACcDAREAAhEBAxEB/8QAigAAAQUBAAAAAAAAAAAAAAAABgECAwQFBwEAAgMBAQAAAAAAAAAAAAAAAQMAAgQFBhAAAgIBAgQEBAILAAAAAAAAAQIDBBEABSExQRIiMhMGkdEUFbEH8FFhcYHBQoIjUxcRAAICAQEHAgcAAAAAAAAAAAABEQIDITFBURIiMgSxE2FxgUIjBRX/2gAMAwEAAhEDEQA/AOk0L1zdPcX1VuVndzN2oSe1VA4Ko5ADXl3e2RttlAyq1lwBp+PGGCSHddvr0pWmUSrGW8AUMeZ+A/WddzBhTqqtIj01IaMOx3dvaxIFy5JbtbDKBy7sEjPX+Oq5fCo+5QTbsOd3LEuye4qUtHMUO7epWv1lJEcqPhQzLy71EnmxnXGwX71PSvR6EqJ7evr92U5/3fhrJS0JgQd190iVO5mACgkk9AOOtFMpYHI5qcsolgsT1qsrtH4ysg7m4gkMoYA54gnWqv7FprgSSDeNt3hjVWtuwr1K8nfPXijEfqpggo3nwMnPDGn/ANVQ5rLa2lWuGhi+5LyPvmyEeWOck/u7oxrl+O+m/wAl6hqDu07sE3NyD5RL/LWV6VZVMrSfmPYuVvpuxYPWft7g5P8AjXzHpgcPx032mthR3Gt+Y8MtRdvaMLCB4bBcls587DHXrqPC4Jzof/0yx69WnIiO0pEMkvechwe1sjGM8jovC4kPMXLllHrLuBOXFqJFY/0osicAOmTz1sxUS8Zve0OXaA1Dc2S7K+TwEufiNZbU0YoShM/3GfcrIAmYtHWTmBEOAJB4BiP0zqZH0qq+pWDY+7pkAqnLB8I+WkQwmBYvW4fcHfWjD0biZsEBcRSpyf8AuHDWmqTx6vVACd7Ln2P6+fH9UDn9omXW6i/BHwY9doIbpQm2f3Df25Z470UXqiK7UkWeGRCwKsHjLLkjmOYPDSclEp1FMqfU2eRjkx0PYeXw0nlRUe1yzyEMuevhb5anKgkJuWRnEDngeHa3y1ZVXEAbVa0tr2X9vWSON445rtm1K3pwKYsyJAkj9qySySKkYRMnjnpro0ovbidw/wC0/9k=",
                "title" => "Reverse Singular Tool",
                "rateUp" => "34",
                "rateDown" => "6"
            ),
            "content" => array
            (
                array
                (
                    "Times Used" => "A lot",
                    "Description" => "Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Curabitur blandit tempus porttitor."
                )
            )
        )
  
    ),
    array
    (
        "title" => "Fringilla Sem",
        "content" => array
        (
            "header" => array
            (
                "icon" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjA1MUQ3RkJDNjFDNjExRTJCNUE0REZBRDM4NDFGMzc1IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjA1MUQ3RkJENjFDNjExRTJCNUE0REZBRDM4NDFGMzc1Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDUxRDdGQkE2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDUxRDdGQkI2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAnACcDAREAAhEBAxEB/8QAigAAAQUBAAAAAAAAAAAAAAAABgECAwQFBwEAAgMBAQAAAAAAAAAAAAAAAQMAAgQFBhAAAgIBAgQEBAILAAAAAAAAAQIDBBEABSExQRIiMhMGkdEUFbEH8FFhcYHBQoIjUxcRAAICAQEHAgcAAAAAAAAAAAABEQIDITFBURIiMgSxE2FxgUIjBRX/2gAMAwEAAhEDEQA/AOk0L1zdPcX1VuVndzN2oSe1VA4Ko5ADXl3e2RttlAyq1lwBp+PGGCSHddvr0pWmUSrGW8AUMeZ+A/WddzBhTqqtIj01IaMOx3dvaxIFy5JbtbDKBy7sEjPX+Oq5fCo+5QTbsOd3LEuye4qUtHMUO7epWv1lJEcqPhQzLy71EnmxnXGwX71PSvR6EqJ7evr92U5/3fhrJS0JgQd190iVO5mACgkk9AOOtFMpYHI5qcsolgsT1qsrtH4ysg7m4gkMoYA54gnWqv7FprgSSDeNt3hjVWtuwr1K8nfPXijEfqpggo3nwMnPDGn/ANVQ5rLa2lWuGhi+5LyPvmyEeWOck/u7oxrl+O+m/wAl6hqDu07sE3NyD5RL/LWV6VZVMrSfmPYuVvpuxYPWft7g5P8AjXzHpgcPx032mthR3Gt+Y8MtRdvaMLCB4bBcls587DHXrqPC4Jzof/0yx69WnIiO0pEMkvechwe1sjGM8jovC4kPMXLllHrLuBOXFqJFY/0osicAOmTz1sxUS8Zve0OXaA1Dc2S7K+TwEufiNZbU0YoShM/3GfcrIAmYtHWTmBEOAJB4BiP0zqZH0qq+pWDY+7pkAqnLB8I+WkQwmBYvW4fcHfWjD0biZsEBcRSpyf8AuHDWmqTx6vVACd7Ln2P6+fH9UDn9omXW6i/BHwY9doIbpQm2f3Df25Z470UXqiK7UkWeGRCwKsHjLLkjmOYPDSclEp1FMqfU2eRjkx0PYeXw0nlRUe1yzyEMuevhb5anKgkJuWRnEDngeHa3y1ZVXEAbVa0tr2X9vWSON445rtm1K3pwKYsyJAkj9qySySKkYRMnjnpro0ovbidw/wC0/9k=",
                "title" => "Fringilla Sem",
                "rateUp" => "111",
                "rateDown" => "42"
            ),
            "content" => array
            (
                array
                (
                    "Times Used" => "999",
                    "What? Again" => "Yes, Sir",
                    "Description" => "Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Curabitur blandit tempus porttitor."
                )
            )
        )

    )
        
    


); // end of CONTENT

/**
 * serve the search term
 */
if ($_GET['term']) {
    // get term from URL
    $term = $_GET['term'];

    $first = TRUE;

    // cycle through array and find value for each SearchTerm
    // limit array to 10 entries
    $limit = 10;
    foreach ($RESPONSES as $key => $array) {
        if (preg_match("/$term/i", $array['searchTerm'])) {
            if ($first == TRUE) {
                $first = FALSE;
                $temp[] = $array;
                $limit--;
            } else {
                array_push($temp, $array);
                $limit--;
                if($limit == 0) break;
            }
        }
    }
    echo $_GET['callback'] . '(' . json_encode($temp) . ');';
}

/**
 * serve the block content
 */
if ($_GET['content']) {
    // get term from URL
    $content = $_GET['content'];

    foreach ($CONTENT as $key => $array) {
        // look for string match
        if (!strcmp($content, $array['title'])) {
            echo $_GET['callback'] . '(' . json_encode($array['content']) . ');';
        }
    }
}

/**
 * serve the author content
 */
if ($_GET['author']) {
    // get term from URL
    $author = $_GET['author'];

    foreach ($AUTHORS as $key => $array) {
        // look for string match
        if (!strcmp($author, $array['name'])) {
            echo $_GET['callback'] . '(' . json_encode($array['content']) . ');';
        }
    }
}














// test print
/*
echo "<pre>";
print_r(json_encode($temp));
echo "</pre>";
*/

/*
echo "<pre>";
print_r($temp);
echo "</pre>";
*/


?>