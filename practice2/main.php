<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>     
        </div>       
     
        <div class="about">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="Img">
                    <?php  echo '<img src="/img/1.jpg" width="450" height="400">'; ?>                    
                </div>

                <div class="name">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Я научился создавать переменные, редактировать их и тд. </p>
                    <p> И очень мучался с созданием knowledge </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?> 
                      <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>
            <hr size=3px width=1200px align="left">


            <div class="article">
                <p class="text">
                Анекдот:<br>
                    Умирает Барак Обама.<br>
    Через 10 лет ему становится скучно, и он просит Бога отпустить его на Землю проведать, как поживает его страна. Бог отпускает. Заходит Обама в Нью-Йорке в бар, заказывает пиво и спрашивает бармена, как страна поживает, как развивается, какие проблемы решает. Бармен удивлённо:<br>
    Какие проблемы могут быть? Мы же Великая империя, всё кругом наше.<br>
    Как наше? А Ирак, Афганистан?
    Да уже всё наше!
    А Европа, Африка, Ближний Восток?<br>
    Бармен достаёт из-под стойки глобус и гордо крутит его:<br>
    Я же говорю - мы империя, весь мир принадлежит нам!<br>
    Обама, радостный, гордый и довольный, допивает пиво и говорит:<br>
    Ну, спасибо, друг! Сколько с меня?<br>
    Бармен:
    Одна гривна.
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
