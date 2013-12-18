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
                            "avatar" => "http://www.mylink.com"
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
                            "avatar" => "http://www.mylink.com"
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
                            "avatar" => "http://www.mylink.com"
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
                            "avatar" => "http://www.mylink.com"
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
                            "avatar" => "http://www.mylink.com"
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
                            "avatar" => "http://www.mylink.com"
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
                            "avatar" => "http://www.mylink.com"
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
                            "linkText" => "Billy Bilmore",
                            "linkURL" => "http://www.mylink.com",
                            "avatar" => "http://www.mylink.com"
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
                            "avatar" => "http://www.mylink.com"
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


$NO_AUTHORS = array
(
    array
    (
        "name" => "Joe Shmoe",
        "content" => array
        (
            "email" => "joe@mydomain.com",
            "avatar" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJCNjQ0RkExNjFGQzExRTJCNUE0REZBRDM4NDFGMzc1IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJCNjQ0RkEyNjFGQzExRTJCNUE0REZBRDM4NDFGMzc1Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QkI2NDRGOUY2MUZDMTFFMkI1QTRERkFEMzg0MUYzNzUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QkI2NDRGQTA2MUZDMTFFMkI1QTRERkFEMzg0MUYzNzUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAyACgDAREAAhEBAxEB/8QAiAAAAwEBAQAAAAAAAAAAAAAABQYHBAMIAQADAQEBAQAAAAAAAAAAAAACAwQFAAEGEAABAwIEAwcCBgMAAAAAAAABAgMEEQUAITESMhMGQVFhcSIUB0IzkVJiNBU1IzY3EQACAgEEAQIFBQAAAAAAAAAAARECAyExQQQSUTJhkUITBXHRIjMU/9oADAMBAAIRAxEAPwAWnplTDq3rdIRKgyYKjHnMtqb5QSoGju/1HNFe/HyvnK1+RuXrP7iVZJ5j3idcJNw9iwG3m3pG0rUVv1SpDaUnctZBKsiKak4tdJSSRm4tLNsosT506bIbjLclIS2lLZkuspVu2gDevYVGp7csIt0rb6FK7VR0t3Usa4RW5cZ1uXFcHofZIPnl3ju1xLfG045Hq8mwyUrSFJNUqzBwphjNbOk/bWtTD8FJb3KKxsCQlORohHDmQTprinwvGwj7qnc8YdRTWZF+uRQOW17l7lNnRI3nGvjrCRn5bzYF7869n04bAtMcPjPqp2y31tl1w/x01aWpDZ4UrVk26PI5HwxL2sStX4lGDJ42Lo9cG4rhZJ4c9D9WeMWy1NIuUm8MoQVZBIFVKUaADGvl/IOyaSM2nWcngvqjpe4K6xvrMCMuQiPLfco0NwS2twqQo+FDlh1OxXxTbO/zWtZwjmn496k9mmYppIbcySmpK691KZYB97HMDl+OyNSZ5VhudsQhyU0WVKoGwaHOla1BwVc9buEBfq2opZcnbRLuDcecStDjzDJWjcRQlsVy78Ylrw2WpaFbQ3IlKCpR3kGqGBmhPifzHzwMhEifdgwPkm9Rng3y7wGvbSEkECQ0VJ5SiMhvGnjTD70dsa9ayH1bqt3OzD8iVARC5YU0GW6lcoKSW0qGSqnw0xH4uTUTQpdbJgSoFjdLaFoXcWdyk6ON1qNuXCRnirqtq1l8CTuJWqv1H+2SoF2hJmQlhxpdQQKVSoGhSodhBwi9HV6krQL+RuoJjUp2M3KXBttv5a5bjX3HlqBUWkDtNO/zxVgogUTww5l9lu3CBEX/ABRZddYYazLDgCipTp13lQCtxxV7VHIL01GGy3CBeYka4SG0JkuU90g5f5m/StaRSh3EVGIM38G18jVwZa2qnyZrx1AiV1FbmIjLfIt61OlTyaoKkoICRmnMDPBdfHCdnySdi8tJAS0z7pJuDrlqHIvjZUtDUZSkocaqSUqSSoE67fwxZaq52J5e4b+RJDcnra7WhyWpAVIRJjsqRwrDCEpUDqpJp6hTA4vbIK9OQFbWrdMss6E3dUMPymC+tshfJBbUFctB9JoRXdlnp2YJynMHiq3UI2a4X62uSYESNFuTdxCfbKSUctDpGTuxQRmUa55nAXx1sk3wFXyqL7E2bDuSHblbHnIaJBFV8xNCqqVKSpG5ASa6YcqqITFrJadTm7eEW2d72yJdhlKlJkl2nNACtEKBOXjSuO8PJQz37k7DR8w/9et3Dxx+Dj4RrgOv/UzvqQBh/wBir7PDI14dFaY9+kOnIPtf9tG+7oPtacH0eOCybBLgZbR+0j/vPuDy4u3CnuzqC715/ss7h+nh4OEcf6/zYPDsJfuP/9k=",
            "description" => "Nulla vitae elit libero, a pharetra augue. Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit."
        )
    ),
    array
    (
        "name" => "Chris Anderson",
        "content" => array
        (
            "email" => "chris@mydomain.com",
            "avatar" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJCNjQ0RkE1NjFGQzExRTJCNUE0REZBRDM4NDFGMzc1IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJCNjQ0RkE2NjFGQzExRTJCNUE0REZBRDM4NDFGMzc1Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QkI2NDRGQTM2MUZDMTFFMkI1QTRERkFEMzg0MUYzNzUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QkI2NDRGQTQ2MUZDMTFFMkI1QTRERkFEMzg0MUYzNzUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAyACgDAREAAhEBAxEB/8QAhAAAAgMAAwAAAAAAAAAAAAAABAUDBgcAAQIBAAMBAQEAAAAAAAAAAAAAAAIDBAEABRAAAgECBAMFBQgDAAAAAAAAAQIDEQQAMRIFITIGQVFhIhOBkbFCM3GhcpJDNDUHFBUWEQACAgEFAAIDAAAAAAAAAAAAARECITFBEgMEURMyQhT/2gAMAwEAAhEDEQA/AALzlOJ2MQtOFhwRNDM6kpGxXvAwMsL62c2oMm82AYEE3EXA8PnGDqsg2TRsXUNze2uxzXNjEJr2Fne2hbJ5FhcqtBTPFb0wIUbmYX8ipEzngFFScTWGVyKbHckacFlqpOWEciulIRd9nu9vmChQpPaOGDGQMZ9q26ZFnVFEsTB4zw4MpqD78EgbKTLpNy6svP7iu726dv8AV2DNAkbsRHHHJEKekvaxrUn3nFnVY8/spDgYdRTtHZhVzldY6+BNT8MSdugfUpYmnsN1CGWygMoFKUoT7ASMLok3kss3GNS4dJbRM13cxzzK0qKDEQCCeHzA91cMfGYOXJrIX07ebyJp7e4t3Fv6jRhnUqyMp7a5g9hGDtSAFeZUAX9idFW+67NLukF3LabptcikSxHSDGyMTq/LgbdnCjsthFq8rpFc6otriQQXELkekaOhPlIJBqR4UwHbUPzWiUNdgvnjlUjlUAkeGF1RXyUEVvumyPvsplsLwes9RfRF9KFTqFdJ1U1eGGQjuTg0Kx3mKS1B1hycn7x2Y5NmNYPFhcmSK8lvrdF2fWHuJpatqZUeqlSKaFQV9uCq8OfxJfQkkn+wVF0LtF7tN3FoCXJAMFxUu6cNVGU0HHHrLypo8z74ZTP+J6ntWmW3jivIVAMcsTBJGRhUExtT7ODYk7PI08FlPUmsklhtO8akFzs1GkqsczFFIIGda1wleW/wP/qpGpOu071Y6AbZ/SeZFLVGlUZvMdQPdWmNr5rfAFvSti1bmtvufTdzYwBljuElhjZuHnaJ4wG7RxatcUrpxBJbsbcs7mv2iuknEpijurOjAD9SEla+4jHqrCINWM0mZLK2ETBZEjABPjQkHCW02NjAPJJdm8tmnRWQuVLcKHWpHxwNl8HVb3I7pp9vTQGST1XJSIjTpTh5ajPzduASe5uUL7u6H+IZIlMcuossAyaR10kDwyOCrWMnS2EdU/yNly/r8nLmn39+KNhe55sv435sz+P2eOE7jQy7/Y2/N9WHm5uYYyxlSPqD93b55Plll83hgbaGlf3P6Vnz/VP08uX4YKuhh//Z",
            "description" => "Nulla vitae elit libero, a pharetra augue. Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit."
        )
    ),
    array
    (
        "name" => "Lisa Bland",
        "content" => array
        (
            "email" => "lisa@mydomain.com",
            "avatar" => "data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgTWFjaW50b3NoIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjA1MUQ3RkMwNjFDNjExRTJCNUE0REZBRDM4NDFGMzc1IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJCNjQ0RjlFNjFGQzExRTJCNUE0REZBRDM4NDFGMzc1Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDUxRDdGQkU2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDUxRDdGQkY2MUM2MTFFMkI1QTRERkFEMzg0MUYzNzUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAyACgDAREAAhEBAxEB/8QAhAAAAwACAwAAAAAAAAAAAAAABQYHAgMBBAgBAAMAAwEAAAAAAAAAAAAAAAIDBAABBQYQAAEDAgUCBQEGBwAAAAAAAAECAwQRBQAhMRIGQTJRYXGBE0KRwSJSMxQjQyQVNTYHEQADAAICAgEFAAAAAAAAAAAAAQIRITEDQQQSUWGBIjL/2gAMAwEAAhEDEQA/AIvCcjxC0pe5TqkihTma00p1GFUsoOENzsNm8QGpUVG2Q0n43UEbVeiq9fDCfljTHJeTuWOLMS2fgV/VoyXHc7XAOnkR0UMJrbKVPkzKktvOhC1t/J+J6G7k40odU/mT5jCqQfIq8htiX3f3KVdvcpJBSfPLTDeu8aF3BouHFpKFIeWVFBToAaVplpiybS5IV1trQQ41Zr3bn2p7MptEZIIfYO5XypP0LBy9KZ4DuqaD6+u55LLabHBuVtQ+5CdhvOAFt81G09M+oxC6a0y2YfgRf+kcb5Nb1IfRGLoVWjyQVZjQppnn5HFMSnyLqmloRbfF5ZLC3Uw1uBqgc/BtUqqqbRoFehwyuiUhMd908YLhYIkCdBbbeaQug6jCLeGVdUZRo5FbrFbpMFl0oYbfdSXFHogHP7cZLNOdlnsdwsj9rTHQ42oUHxpFCCKZYxNNA1NJmS02yehyDNaQtANKEDpjc14M+D5RrjcQtEZYW22hQHbUAkYJms5PPXF+RiG+uM8aFCinyqDTG7gPpv8AUHcnC+UXRavnSlpsfHsJ0wUrCBu96KBxHgESRbYiZlwdLsVxLza0OLRSgyqAaK98Bew47aQz3W9/2q9tNuOlTTyRsWdSR44XSwH1LKGq339p9pJCgSdDgkzVzg898rs6LbPaujSQY8iqJDFM07ABv9+uK6lnN9buxpifx2Hb51+lR35z0UvGsR1tQCa/lIVkcLpvB0vVibpp8lcsdnvMdlDS7/sbQnaHVNJGWoKjXAJJl1+sl4AnOIPJm1MS3JIlW5ChteKdrqCcqlI+k41lcEzSmtB7jt2kx2UB10KAAJUTQYFoXVEju/PLxfLkpolLDO1SPjSPppoa18Mdaq3haPPTGFl7AtnaiXB9LMl/9o8FUSvQGh8ehxFk6fWy3cNt1ojRkmTcHJbjYr/GcqkeFBhGPsdC+62sNsNXS5QZTC4cYB/5BtXXNIHmcDjHIl39BZ5Tbk27jTymW1OLcoh53MBCD0SPvwuqbMTIfbP8oPXppjseThv+Tl79Rfb3q09emJK5LevgceI6j0/nae2FX+SmSocf1T+n7duJ6DkNcs/12T2do17deuMRqj//2Q==",
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