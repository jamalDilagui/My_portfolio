<template>
    <div class="row">
        <div class="col-md-6 form">
            <div class="email">
                <h2>Get in touch</h2>
                <p>
                    I am interested in freelance opportunities, if you wanna get in touch, talk to me about a project collaboration or just say hi,
                    fill up the awesome form below or send an email and let's talk.
                </p>
                <span>jamaldilagui38@gmail.com</span>
            </div>
            <div class="social">
                <h2>Let's get social</h2>
                <p>
                    If you have other request or question, don’t hesitate to contact me using below sociel media either.
                </p>
                <ul>
                    <li>
                        <a href="https://www.facebook.com/jamal.dilagui" target="_blank" class="fb"><i class="fa fa-facebook-f"></i> facbook</a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/jamal-eddin-dilagui-4b8767184/" target="_blank" class="link"><i class="fa fa-linkedin"></i> linkedin</a>
                    </li>
                    <li>
                        <a href="https://github.com/jamalDilagui" target="_blank" class="git"><i class="fa fa-github"></i> github</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>

<style lang="scss" scoped>
    .form{
        top: 50%;
        position: absolute;
        margin-top: -218px;
       .email{
            h2{
                font-weight: 700;
                font-size: 47px;
            }
            p{
                font-size: 1.15em;
                line-height: 1.7em;
                color: white;
                width: 107%;
            }
            span{
                font-weight: 700;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                font-size: 20px;
            }
       }
        .social{
            margin-top: 40px;
            h2{
                font-weight: 700;
                font-size: 47px;
            }
            p{
                font-size: 1.15em;
                line-height: 1.7em;
                color: white;
                width: 107%;
            }
            span{
                font-weight: 700;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                font-size: 20px;
            }
            ul{
                padding: 0;
                margin-top: 40px;
                li{
                    list-style: none;
                    display: inline;
                    margin-right: 40px;
                    a{
                        text-decoration: none;
                        color: white;
                        border-radius: 10px;
                        padding: 10px;
                        border: 1px solid;
                    }
                    
                    .fb:hover{
                        border: 1px solid #3b5998;
                        background: #3b5998;
                    }
                     .link:hover{
                        border: 1px solid #0077b5;
                        background: #0077b5;
                    }
                    .git:hover{
                        border: 1px solid #333;
                        background: #333;
                    }
                }
            }
        }
    }
</style>