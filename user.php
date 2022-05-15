<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Olá NOME!</title>

        <link rel="stylesheet" href="style/user.css">

        <link rel="shortcut icon" href="imgs/iconbus.png" type="image/x-icon">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>

        <div id="title">
            <h2>
                Gestão do Ônibus da FCARP
            </h2>
        </div>

        <header>
            <div class="nav-item" style="margin-left: 40px;">
                <h2>
                    Olá NOME!
                </h2>
                <h2>
                    Hoje: 00/00/0000
                </h2>
            </div>

            <div class="nav-item" style="margin-right: 40px;">
                <form method="POST">
                    <label for="entrar">
                        <div class="btnsubmit">
                            SAIR
                        </div>
                    </label>
                    <button style="display: none;" type="submit" name="entrar" id="entrar"></button>
                </form>
            </div>
        </header>

        <div id="form">
            <form method="POST">
                <label for="ponto" class="agatres">Informe seu ponto e <br> confirme sua ida!</label>
                <select aria-required="true" name="ponto"  placeholder="Teste" id="ponto" class="form-select" required>
                    
                    <option value='' disabled selected>Selecione seu ponto</option>
                    <option value="1">Fórum</option>
                
                </select>

                <label for="ir" id="label">
                    <div class="btnsubmit" id="irlabel">
                        HOJE EU VOU!
                    </div>
                </label>
                <button style="display: none;" type="submit" name="entrar" id="ir"></button>
            </form>

            <div class="txtpadrao" style="text-align: center;">
                Alunos que vão hoje: <span style="font-weight: bolder;">00</span>
            </div>
        </div>

        <div style="width: 200px;
            height: 3px;
            border-radius: 10px;
            background-color: #0500FF;
            margin: 15px auto;"></div>
        
        <div>
            <div class="txtpadrao" id="tips">
                Quantidade total de Alunos: <span style="font-weight: bolder;">62</span>
                <br> <br>
                <span style="font-weight: bolder;">
                Mensalidade: <br>
                Integral </span>R$155
                <br>
                <span style="font-weight: bolder;">
                Último Semestre</span> R$80
                <br><br>
                (Pagar até dia 10/06 em
            mãos para o líder)
                </span>
                
        </div>

            

    

            <div style="width: 200px;
            height: 3px;
            border-radius: 10px;
            background-color: #0500FF;
            margin: 15px auto;"></div>

            <!--

            Fórum
            Marista
            Japão
            Droga Miza/Praça
            Anchieta
            Mundo Verde
            Macevi
            Prefeitura
            Favo de Mel
            Saída
            BR
            Outro (Informar no grupo)


            -->
            
        </div>

        <div id="status">
            <div>
                <h3 class="agatres">
                    Onde o ônibus esta/estava?
                </h3>
                <div id="boxstatus">
                    INATIVO
                </div>
            </div>
        </div>

        <footer>
            <p>
                Desenvolvido pelo Líder: Gustavo
                <a href="https://wa.me/5565998001202" target="_blank">Meu Whatsapp</a>
            </p>
        </footer>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>

