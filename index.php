<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style/index.css">
        <link rel="shortcut icon" href="imgs/iconbus.png" type="image/x-icon">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


        <title>Gestão do Ônibus - FCARP</title>
    </head>
    <body>

        <header>
            <h2>
                Gestão do Ônibus da FCARP
            </h2>
        </header>

        <section id="body">
            <h3>LOGIN</h3>
            <div id="formlogin">
                <form method="post" class="centro">
                    <div>
                        <div>
                            <div class="campsinputs">
                                <div id="" class="labelicon">
                                    <svg width="33" height="10" viewBox="0 0 33 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.90988 4.944L10.5259 6.36L9.34988 8.328L6.70988 6.768L6.75787 9.672H4.50188L4.52588 6.744L1.88588 8.328L0.733875 6.36L3.34988 4.944L0.733875 3.504L1.88588 1.536L4.52588 3.12L4.50188 0.191999H6.75787L6.70988 3.12L9.34988 1.536L10.5259 3.504L7.90988 4.944ZM18.7849 4.944L21.4009 6.36L20.2249 8.328L17.5849 6.768L17.6329 9.672H15.3769L15.4009 6.744L12.7609 8.328L11.6089 6.36L14.2249 4.944L11.6089 3.504L12.7609 1.536L15.4009 3.12L15.3769 0.191999H17.6329L17.5849 3.12L20.2249 1.536L21.4009 3.504L18.7849 4.944ZM29.6599 4.944L32.2759 6.36L31.0999 8.328L28.4599 6.768L28.5079 9.672H26.2519L26.2759 6.744L23.6359 8.328L22.4839 6.36L25.0999 4.944L22.4839 3.504L23.6359 1.536L26.2759 3.12L26.2519 0.191999H28.5079L28.4599 3.12L31.0999 1.536L32.2759 3.504L29.6599 4.944Z" fill="white"/>
                                        </svg>
                                </div>
                                <input placeholder="LOGIN" maxlength="4" type="text" name="login" id="login" required>
                            </div>
                            <div class="campsinputs">
                                <div id="" class="labelicon">
                                    <svg width="23" height="31" viewBox="0 0 23 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.125 10.0625H18.6875V7.1875C18.6875 3.22 15.4675 0 11.5 0C7.5325 0 4.3125 3.22 4.3125 7.1875V10.0625H2.875C1.29375 10.0625 0 11.3562 0 12.9375V27.3125C0 28.8937 1.29375 30.1875 2.875 30.1875H20.125C21.7062 30.1875 23 28.8937 23 27.3125V12.9375C23 11.3562 21.7062 10.0625 20.125 10.0625ZM11.5 23C9.91875 23 8.625 21.7062 8.625 20.125C8.625 18.5438 9.91875 17.25 11.5 17.25C13.0813 17.25 14.375 18.5438 14.375 20.125C14.375 21.7062 13.0813 23 11.5 23ZM15.9563 10.0625H7.04375V7.1875C7.04375 4.72937 9.04187 2.73125 11.5 2.73125C13.9581 2.73125 15.9563 4.72937 15.9563 7.1875V10.0625Z" fill="white"/>
                                        </svg>
                                </div>
                                <input placeholder="SENHA" type="text" maxlength="1" name="senha" id="senha" required>
                            </div>
                        </div>
                        
                        <!-- BOTÃO DE ENTRAR -->
                        <div class="centro" style="margin: 25px 0px;">
                            <label for="entrar">
                                <div id="btnsubmit">
                                    ENTRAR
                                </div>
                            </label>
                            <button style="display: none;" type="submit" name="entrar" id="entrar"></button>
                        </div>
                        <!-- BOTÃO DE ENTRAR -->
                    </div>
                </form>

                <?php

                $login = !isset($_POST['login']);
                $senha = !isset($_POST['senha']);

                if ($login == '1234' or $senha == '1') {
                    echo "<div id='vazio' style='margin: 0px auto 20px auto;width: 300px; text-align: center;' class='alert alert-danger'>Login ou Senha inválidos</div>";
                }
                ?>

            </div>

            <div class="txtpadrao" id="tips">
                <span style="font-weight: bolder;">Login:</span> Últimos 4 dígitos do seu telefone
                <br> <br>
                <span style="font-weight: bolder;">Senha:</span> Apenas o número
                do seu semestre
            </div>

            <div style="width: 200px;
            height: 3px;
            border-radius: 10px;
            background-color: #0500FF;
            margin: 15px auto;"></div>

            <div id="status">
                <div>
                    <h3>
                        Onde o ônibus esta/estava?
                    </h3>
                    <div id="boxstatus">
                        INATIVO
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <p>
                Desenvolvido pelo Líder: Gustavo
                <a href="https://wa.me/5565998001202" target="_blank">Meu Whatsapp</a>
            </p>
        </footer>
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>