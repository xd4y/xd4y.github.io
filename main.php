<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style1.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="img/1.jpg" alt="Млада" title="Я - Красотка!">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'село', ' ', $village; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Я учусь на курсе SkillFactory "Пентест" </p>
                    <p> Мне тяжело, но я справлюсь </p>
                    <p> Ниже примеры работы скриптов PHP: </p>
                </div>
            
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?><br>
                    <?php  echo "Теорема Пифагора: катет1 = ", $a, ', ',"катет2 = ", $b, ', ', "гипотенуза = ", $c; ?> <br>
                    <?php  echo "Квадрат катета1 = ", $a*$a, " плюс квадрат катета2 = ", $b*$b, " равно квадрату гипотенузы = ", $c*$c; ?> <br>
                    <?php  echo "$d ${$d}";?>
                
            </div>

            <div class="article">
                <p class="text">
                PHP, расшифровывающийся как "PHP: Hypertext Preprocessor" - «PHP: Препроцессор Гипертекста», 
                является распространённым интерпретируемым языком общего назначения с открытым исходным кодом. 
                PHP создавался специально для ведения веб-разработок и код на нем может внедряться непосредственно в HTML-код. 
                Синтаксис языка берет начало из C, Java и Perl, и является лёгким для изучения. 
                Основной целью PHP является предоставление веб-разработчикам возможности быстрого создания динамически генерируемых веб-страниц, 
                однако область применения PHP не ограничивается только этим.
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>