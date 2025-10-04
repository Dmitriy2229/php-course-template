<h1>🧙‍♂️ Подготовка хоббитов к путешествию</h1>

<?php
$allHobbits = ["Фродо", "Сэм", "Мэри", "Пиппин", "Бильбо", "Тук", "Лобелия", "Рози","Фатти Болджер", "Одо", "Фредгар"];
$partySize = rand(2, 5);
shuffle($allHobbits);
$party = array_slice($allHobbits, 0, $partySize);
$names = implode(', ', $party);
$colichestvo = count($party);


$transports = ["лощадь", "осёл", "повозка", "нет транспорта"];
$myTransport = rand(0, 3); 
$myTransport = $transports[$myTransport];

$allSupplies = ["лембас", "яблоки", "грибы", "мёд", "сыр", "сало", "копчёная рыба"];
$food = rand(0, 6);
$food = $allSupplies[$food];

$partyEvents = [
    "{hobbit} решил испечь пирог перед выходом.",
    "{hobbit} не смог найти свой плащ, пришлось искать всем вместе.",
    "{hobbit} потерял карту и пришлось искать её по всему дому.",
    "{hobbit} помог собрать лишний мешок орехов, и это задержало выход.",
    "{hobbit} наоборот всех поторопил, и сборы пошли быстрее!",
];
$party = rand(0, 4);
$party = $partyEvents[$party];

$nazgulDays = 5;


?>

<div class='block'>
    В поход отправляется <?= $colichestvo?> хоббитов: <?= $names?><br>
</div>
 
<div class='block'>
    <?if ($myTransport === 'нет транспорта') {?>
        К сожалению, транспорта нет. Хоббитам придется идти пешком! 
    <?} else ?>
        Хоббиты нашли транспорт: <?=$myTransport?>
    }?>
</div> 
 
<div class='block'> 
    Собрали припасы: <br>
    <?foreach ($allSupplies as $food) {
        echo("- $food <br>");
    }?>
</div>

<div class='block'>
    Случившиеся событие: <br>
    <?foreach ($partyEvents as $party) {
        echo("- $party <br>"); 
    }?>
</div>

<div class='block'>
    столько дней собирались хоббиты: 
    
</div>