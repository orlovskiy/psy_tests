<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/kettel.css">
	<title>test machine</title>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>
<body>






													<!-- test interpretation engine -->
<?include '../1.kettel/func.php';

?>
	<div class="test_results">
		<?php 
		error_reporting(0);


			$text= '1. Я хорошо понял инструкцию, которую только что прочитал: 
а) да;	в) не уверен;	с) нет.
2. Я готов отвечать на каждый вопрос так искренне, как только возможно: 
а) да;	в) не уверен;	с) нет.
3. Я бы предпочел временами жить в доме, который находится: 
а) в обжитом городе;	в) нечто среднее;	с) одиноко в глухих лесах.
4. Я чувствую в себе достаточно сил, чтобы справиться со своими трудностями: 
а) всегда;	в) обычно;	с) редко.
5. Я чувствую некоторое беспокойство при виде диких животных, даже если они находятся в прочных клетках: 
а) верно;	в) не уверен;	с) неверно.
6. Я воздерживаюсь от критики людей и их высказываний: 
а) да;	в) иногда;	с) нет.
7. Я делаю саркастические (язвительные) замечания по поводу людей, если они этого, по-моему, заслуживают: 
а) обычно;	в) иногда;	с) никогда.
8. Мне больше нравится классическая, чем эстрадная музыка: 
а) верно;	в) не уверен;	с) неверно.
9. Если бы я увидел дерущихся соседских детей, то я: 
а) дал бы им возможность договориться самим;	в) не знаю, что предпринял бы;	с) рассудил бы их.
10. При общении с людьми я: 
а) с готовностью вступаю в разговор;	в) нечто среднее;	с) предпочитаю спокойно оставаться в стороне.
11. По-моему интереснее быть: 
а) инженером-строителем;	в) не уверен;	с) драматургом.
12. Я остановился бы на улице скорее, чтобы посмот¬реть на работу художника, чем слушать, как ссорятся люди: 
а) верно;	в) не уверен;	с) неверно.
13. Обычно я могу ладить с самодовольными людьми, несмотря на то, что они хвастаются или слишком много о себе воображают: 
а) да;	в) нечто среднее;	с) нет.
14. По лицу человека всегда можно заметить, что он нечестный: 
а) да;	в) не уверен;	с) нет.
15. Было бы хорошо, если бы отпуск (каникулы) был более продолжителен, и каждый был бы обязан его ис¬пользовать: 
а) согласен;	в) не уверен;	с) не согласен.
16. Я предпочел бы работу с возможно большим, но непостоянным заработком, чем работу со скромным, но постоянным окладом: 
а) да;	в) не уверен;	с) нет.
17. Я говорю о своих чувствах: 
а) только если это необходимо;	в) нечто среднее;	с) охотно, когда представится возможность.
18. Время от времени у меня возникает чувство неопре¬деленной опасности или внезапного страха по непонятным причинам: 
а) да;	в) нечто среднее;	с) нет.
19. Когда меня неправильно критикуют за что-то, в чем я не виноват, я: 
а) не испытываю чувства вины;	в) нечто среднее;	с) испытываю.
20. За деньги можно купить почти все: 
а) да;	в) не уверен;	с) нет.
21. Моим решением руководит больше:
а) сердце;	в) сердце и разум в равной степени;	с) разум.
22. Большинство людей были бы больше счастливы, если бы они были ближе друг к другу и поступали также, как все: 
а) да;	в) не уверен;	с) нет.
23. Иногда, когда я смотрю в зеркало, мне трудно ра¬зобраться, где у меня правая, а где левая сторона: 
а) верно;	в) не уверен;	с) нет.
24. При разговоре я предпочитаю: 
а) высказывать свои мысли так, как они приходят мне в голову;	в) нечто среднее;	с) сначала сформулировать получше свои мысли.
25. После того, как меня что-то сильно рассердит, я довольно быстро успокаиваюсь: 
а) да;	в) нечто среднее;	с) нет.
26. При одинаковом рабочем времени и заработке было бы интереснее работать: 
а) плотником или поваром;	в) не уверен;	с) официантом в хорошем ресторане.
27. На общественные должности меня выбирали: 
а) очень редко;	в) иногда;	с) много раз.
28. «Лопата» относится к «копать», как «нож» относится к: 
а) острый;	в) резать;	с) указывать.
29. Иногда я не могу заснуть, потому что какая-нибудь мысль не выходит из головы: 
а) верно;	в) не уверен;	с) неверно.
30. В своей жизни я почти всегда достигаю поставлен¬ных целей: 
а) верно;	в) не уверен;	с) неверно.
31. Устаревший закон следует изменить: 
а) только после глубокого основательного обсуждения;	в) не уверен;	с) как можно скорее.
32. Я чувствую себя «не в своей тарелке», когда мне приходится работать над чем-нибудь, что требует быстрых действий, результаты которых могут повлиять на других людей: 
а) верно;	в) нечто среднее;	с) неверно.
33. Большинство знакомых считают меня интересным рассказчиком:
а) да;	в) не уверен;	с) нет.
34. Когда я вижу неряшливых, неопрятных людей, я:
а) принимаю их такими, как они есть;	в) нечто среднее;	с) испытываю отвращение и возмущение.
35. Я чувствую себя немного не по себе, если неожидан¬но оказываюсь в центре внимания группы людей:
а) да;	в) нечто среднее;	с) нет.
36. Я всегда рад оказаться среди людей, например, в гостях, на танцах, на какой-либо коллективной встрече:
а) да;	в) нечто среднее;	с) нет.
37. В школе я предпочитал (или предпочитаю):
а) заниматься музыкой, пением;	в) нечто среднее;	с) выпиливать и мастерить что-либо.
38. Если меня назначают руководителем чего-либо, я настаиваю на том, чтобы мои указания выполнялись, ина¬че я отказываюсь от этой работы:
а) да;	в) иногда;	с) нет.
39. Важнее, чтобы родители:
а) помогали детям развивать свои чувства;	в) нечто среднее;	с) обучали детей сдерживать свои чувства.
40. Участвуя в групповой деятельности, я бы предпочел:
а) постараться улучшить организацию работы;	в) нечто среднее;	с) следить за результатами и соблюдением правил.
41. Время от времени у меня появляется потребность в интересной физической деятельности: 
а) да;	в) нечто среднее;	с) нет.
42. Я предпочел бы скорее общаться с вежливыми людь¬ми, чем с грубоватыми и любящими возражать:
а) да;	в) нечто среднее;	с) нет.
43. Я чувствую себя очень униженным, когда меня кри¬тикуют в присутствии группы людей:
а) верно;	в) нечто среднее;	с) неверно.
44. Если меня вызывает начальство, то я:
а) пользуюсь случаем, чтобы попросить о чем-то нуж¬ном мне;	в) нечто среднее;	с) боюсь, что это связано с какой-нибудь оплошнос¬тью в моей работе.
45. В наше время требуется:
а) больше спокойных, солидных людей;	в) не уверен;	с) больше «идеалистов», планирующих лучшее бу¬дущее.
46. При чтении я сразу замечаю, когда автор произве¬дения хочет меня в чем-то убедить: 
а) да;	в) не уверен;	с) нет.
47. В юности я принимал участие в нескольких спортив¬ных мероприятиях:
а) иногда;	в) довольно часто;	с) многократно.
48. Я поддерживаю порядок в моей комнате, все вещи всегда лежат на своих местах:
а) да;	в) нечто среднее;	с) нет.
49. Иногда у меня возникает чувство напряжения и беспокойства, когда я вспоминаю, что произошло в тече¬ние дня:
а) да;	в) нечто среднее;	с) нет.
50. Иногда я сомневаюсь, действительно ли люди, с которыми я разговариваю, интересуются тем, что я говорю:
а) да;	в) не уверен;	с) нет.
51. Если бы пришлось выбирать, то я предпочел бы быть: 
а) лесником;	в) не уверен;	с) учителем средней школы.
52. На праздники и дни рождения я:
а) люблю делать подарки;	в) неопределенно;	с) считаю, что делать подарки - довольно неприят¬ная вещь.
53. «Усталый» относится к «работе», как «гордый» к:
а) улыбка;	в) успех;	с) счастливый.
54. Какой из следующих предметов по существу отли¬чается от двух других:
а) свеча;	в) луна;	с) электрический свет.
55. Друзья меня подводили:
а) очень редко;	в) иногда;	с) довольно часто.
56. У меня есть качества, по которым я определенно выше большинства людей:
а) да;	в) не уверен;	с) нет.
57. Когда я расстроен, я стараюсь скрыть свои чувства от других:
а) верно;	в) нечто среднее;	с) неверно.
58. Я склонен посещать зрелищные мероприятия и раз¬влечения:
а) чаще, чем раз в неделю (т. е. чаще, чем большинство);	в) примерно раз в неделю (т. е. как большинство);	с) реже, чем раз в неделю (т. е. реже, чем большинство).
59. Я считаю, что возможность вести себя непринуж¬денно важнее, чем хорошие манеры и уважение к суще¬ствующим правилам поведения:
а)верно;	в) не уверен;	с) неверно.
60. Обычно я молчу в присутствии старших по возрас¬ту, опыту и положению:
а) да;	в) нечто среднее;	с) нет.
61. Мне трудно говорить или декламировать перед боль¬шой группой людей:
а) да;	в) нечто среднее;	с) нет.
62. У меня хорошее чувство ориентировки в незнако¬мом месте (мне легко сказать, где север-восток-юг-запад):
а) да;	в) нечто среднее;	с) нет.
63. Если кто-нибудь рассердится на меня, то я:
а) постараюсь его успокоить;	в) нечто среднее;	с) раздражаюсь.
64. Встречаясь с несправедливостью, я скорее склонен забыть об этом, чем реагировать:
а) верно;	в) не уверен;	с) неверно.
65. Из моей памяти часто выпадают несущественные тривиальные вещи, например, названия улиц, магазинов:
а) да;	в) нечто среднее;	с) нет.
66. Мне бы понравилось жизнь ветеринара, лечение и операции на животных:
а) да;	в) не уверен;	с) нет.
67. Я ем со вкусом, не всегда так аккуратно и тщатель¬но как другие люди:
а) да;	в) не уверен;	с) неверно.
68. Бывают времена, когда у меня нет настроения ви¬деть кого бы то ни было:
а) очень редко;	в) нечто среднее;	с) довольно часто.
69. Иногда меня предупреждают о том, что в моем голосе и манерах слишком проявляется возбуждение:
а) да;	в) нечто среднее;	с) нет.
70. В юности, если я расходился во мнении с родителя¬ми, то я:
а) оставался при своем мнении;	в) нечто среднее;	с) соглашался с их авторитетом.
71. Я предпочел бы заниматься самостоятельной рабо¬той, а не совместной с другими: 
а) да;	в) не уверен;	с) нет.
72. Мне бы больше понравилась спокойная жизнь в моем духе, чем слава и шумный успех: 
а) верно;	в) не уверен;	с) неверно.
73. В большинстве случаев я чувствую себя зрелым че¬ловеком:
а) верно;	в) не уверен;	с) неверно.
74. Замечания в мой адрес, которые позволяют себе неко¬торые люди, меня больше расстраивают, чем помогают:
а) часто;	в) иногда;	с) никогда.
75. Я всегда способен управлять проявлением своих чувств:
а) да;	в) нечто среднее;	с) нет.
76. Начиная работу над полезным изобретением я бы предпочел:
а) разрабатывать его в лаборатории;	в) нечто среднее;	с) заниматься его практической реализацией.
77. «Удивление» относится к «странный», как «страх» относится к:
а) «смелый»;	в) «тревожный»;	с) «ужасный».
78. Которая из последующих дробей отличается от двух других:
а) 3/7;	в) 3/9;	с) 3/11.
79. Кажется, некоторые люди игнорируют и избегают меня, хотя я не знаю почему:
а) верно;	в) не уверен;	с) неверно.
80. Отношения ко мне людей не соответствуют моим добрым намерениям:
а) часто;	в) иногда;	с) никогда.
81. Употребление нецензурных выражений вызывает у меня возмущение, даже если не присутствуют лица друго¬го пола:
а) да;	в) нечто среднее;	с) нет.
82. У меня определенно меньше друзей, чем у большин¬ства людей:
а) да;	в) нечто среднее;	с) нет.
83. Я бы очень не хотел находиться в таком месте, где нет таких людей, с которыми можно поговорить:
а) верно;	в) нечто среднее;	с) нет.
84. Люди иногда считают меня небрежным, хотя и ду¬мают, что я приятный человек:
а) да;	в) не уверен;	с) нет.
85. Волнение перед выступлением в присутствии мно¬гих людей я испытывал:
а) довольно часто;	в) иногда;	с) почти никогда.
86. Когда я нахожусь в большой группе людей, то я предпочитаю молчать, и предоставляю слово другим:
а) да;	в) нечто среднее;	с) нет.
87. Я предпочитаю читать:
а) реалистические описания военных и политичес¬ких сражений;	в) нечто среднее;	с) роман, где много чувств и воображения.
88. Когда люди пытаются мною командовать, то я по¬ступаю как раз наоборот:
а) да;	в) нечто среднее;	с) нет.
89. Начальник или члены моей семьи критикуют меня только тогда, когда к этому действительно есть повод:
а) верно;	в) нечто среднее;	с) неверно.
90. На улицах или в магазинах мне не нравится, когда некоторые люди пристально разглядывают других:
а) да;	в) нечто среднее;	с) нет.
91. Во время длительной поездки я бы предпочел:
а) читать что-нибудь серьезное, но интересное;	в) неопределенно;	с) провести время беседуя с кем-нибудь из пассажи¬ров.
92. В ситуациях, которые могут стать опасными, я гром¬ко разговариваю, хотя это выглядит невежливо и наруша¬ет спокойствие:
а) да;	в) не уверен;	с) нет.
93. Если знакомые плохо обращаются со мной и пока¬зывают свою неприязнь, то:
а) меня это совершенно не трогает;	в) нечто среднее;	с) я расстраиваюсь.
94. Я смущаюсь, когда меня хвалят или говорят мне комплименты:
а) да;	в) нечто среднее;	с) нет.
95. Я бы предпочел иметь работу:
а) с постоянным окладом;	в) нечто среднее;	с) с большим окладом, который бы зависел от моей способности показать людям, чего я стою.
96. Чтобы быть информированным, я предпочитаю по¬лучать сведения:
а) в общении с людьми;	в) нечто среднее;	с) из литературы.
97. Мне нравится принимать активное участие в обще¬ственной работе:
а) да;	в) нечто среднее;	с) нет.
98. При выполнении задания я удовлетворяюсь только тогда, когда должное внимание будет уделено всем мелочам:
а) верно;	в) не уверен;	с) неверно.
99. Даже самые незначительные неудачи иногда меня слишком раздражают:
а) да;	в) нечто среднее;	с) нет.
100. Сон у меня всегда крепкий, я никогда не хожу и не разговариваю во сне:
а) да;	в) не уверен;	с) нет.
101. Для меня интереснее работа, при которой:
а) нужно разговаривать с людьми;	в) нечто среднее;	с) нужно заниматься счетами и записями.
102. «Размер» так относится к «длине», как «нечестный» к:
а) «тюрьма»;	в) «нарушение»;	с) «кража».
103. «АБ» так относится к «ГВ», как «СР» относится к:
а) «ПО»;	в) «ОП»;	с) «ТУ».
104. Когда люди ведут себя неразумно, то я:
а) молчу;	в) не уверен;	с) высказываю свое презрение.
105. Если кто-нибудь громко разговаривает, когда я слушаю музыку:
а) могу сосредоточиться на музыке, не отвлекаться;	в) нечто среднее;	с) чувствую, что это портит мне удовольствие и раз¬дражает<.
106. Меня лучше характеризовать как:
а) вежливого и спокойного;	в) нечто среднее;	с) энергичного.
107. В общественных мероприятиях я принимаю учас¬тие только тогда, когда это нужно, а в иных случаях избе¬гаю их:
а) да;	в) не уверен;	с) нет.
108. Быть осторожным и не ждать хорошего лучше, чем быть оптимистом и всегда ждать успеха:
а) верно;	в) не уверен;	с) неверно.
109. Думая о трудностях в своей работе, я:
а) стараюсь планировать заранее, прежде чем встре-тить трудность;	в) нечто среднее;	с) считаю, что справлюсь с трудностями по мере того, как они возникнут.
110. Мне легко вступить в контакт с людьми во время различных общественных мероприятий:
а) верно;	в) не уверен;	с) неверно.
111. Когда требуется немного дипломатии и умения убедить, чтобы побудить людей что-либо сделать, обычно об этом просят меня:
а) верно;	в) не уверен;	с) неверно.
112. Интересно быть:
а) консультантом, помогающим молодым людям вы¬бирать профессию;	в) нечто среднее;	с) руководителем технического предприятия.
113. Если я уверен, что человек несправедлив или ве¬дет себя эгоистично, я указываю на это, даже если это связано с неприятностями:
а) да;	в) нечто среднее;	с) нет.
114. Иногда я говорю глупости ради шутки, чтобы уди¬вить людей и посмотреть, что они на это скажут:
а) да;	в) не уверен;	с) нет.
115. Мне бы понравилось быть газетным критиком в разделе драмы, театра, концертов:
а) да;	в) не уверен;	с) нет.
116. У меня никогда не бывает потребности что-нибудь рисовать или вертеть в руках, ерзать на месте, когда прихо¬дится долго сидеть на собрании:
а) верно;	в) не уверен;	с) неверно.
117. Если кто-нибудь говорит мне что-то неправильное, то я скорее подумаю:
а) «он - лжец»;	в) не уверен;	с) «по-видимому, он плохо информирован».
118. Я чувствую, что мне угрожает какое-то наказание, даже когда я ничего плохого не сделал:
а) часто;	в) иногда;	с) никогда.
119. Мнение о том, что болезнь также часто бывает от психических, как и от физических факторов, сильно пре¬увеличена:
а) да;	в) не уверен;	с) нет.
120. Торжественность и величие традиционных цере¬моний следует сохранить:
а) да;	в) не уверен;	с) нет.
121. Мысль о том, что люди подумают, будто я веду себя необычно или странно, меня беспокоит: 
а) очень;	в) немного;	с) совсем не беспокоит.
122. Выполняя какое-либо дело, я бы предпочел рабо¬тать:
а) в составе коллектива;	в) не уверен;	с) самостоятельно.
123. У меня бывают периоды, когда мне трудно изба¬виться от чувства жалости к себе:
а) часто;	в) иногда;	с) никогда.
124. Часто я слишком быстро начинаю сердиться на людей:
а) да;	в) нечто среднее;	с) нет.
125. Я всегда могу без труда изменить свои старые при¬вычки и не возвращаться к прежнему:
а) да;	в) не уверен;	с) нет.
126. Если бы зарплата была одинаковой, то я предпо¬чел бы быть:
а) адвокатом;	в) не уверен;	с) пилотом или капитаном судна.
127. «Лучшее» так относится к «наихудшее», как «мед¬ленное» к:
а) «быстрое»;	в) «лучшее»;	с) «быстрейшее».
128. Каким из приведенных ниже сочетаний следует продолжить буквенный ряд: РООООРРОООРРР...:
а) ОРРР;	в) ООРР;	с) РООО.
129. Когда приходит время осуществить то, что я пла¬нировал и на что надеялся, я обнаруживаю, что уже про¬пало желание делать это:
а) верно;	в) нечто среднее;	с) неверно.
130. Большей частью я могу продолжать работать тща¬тельно, не обращая внимания на шум, создаваемый другим:
а) да;	в) нечто среднее;	с) нет.
131. Иногда я говорю посторонним вещи, кажущиеся мне важными, независимо от того, спрашивают ли они об этом:
а) да;	в) нечто среднее;	с) нет.
132.Много свободного времени я провожу в разговорах с друзьями о прошлых развлечениях, от которых я полу¬чал удовольствие:
а) да;	в) нечто среднее;	с) нет.
133. Мне нравится устраивать какие-нибудь смелые рискованные выходки «смеха ради»:
а) да;	в) не уверен;	с) нет.
134. Вид неубранной комнаты очень раздражает меня:
а) да;	в) нечто среднее;	с) нет.
135. Я считаю себя общительным открытым человеком:
а) да;	в) нечто среднее;	с) нет.
136. В общении я:
а) свободно проявляю свои чувства;	в) нечто среднее;	с) держу свои переживания «про себя».
137. Я люблю музыку:
а) легкую, живую;	в) нечто среднее;	с) чувствительную.
138. Красота поэмы восхищает меня больше, чем кра¬сота хорошо сделанного оружия:
а) да;	в) не уверен;	с) нет.
139. Если мое удачное замечание остается незамечен¬ным окружающими, то я:
а) смирюсь с этим;	в) нечто среднее;	с) даю людям возможность услышать его еще раз.
140. Мне бы понравилось работать фотокорреспондентом:
а) да;	в) не уверен;	с) нет.
141. Нужно быть осторожным в общении с незнакомы¬ми, так как можно, например, заразиться:
а) да;	в) не уверен;	с) нет.
142. При поездке за границу я бы предпочел быть под руководством экскурсовода, чем самому планировать мар¬шрут:
а) да;	в) не уверен;	с) нет.
143. Меня справедливо считают упорным и трудолюби¬вым, но не слишком преуспевающим человеком:
а) да;	в) не уверен;	с) нет.
144. Если люди пользуются моим хорошим отношени¬ем в своих интересах, то я не возмущаюсь этим и вскоре об этом забываю:
а) верно;	в) нечто среднее;	с) неверно.
145. Если при обсуждении какого-либо вопроса среди участ¬ников возникает ожесточенный спор, то я предпочитаю:
а) увидеть, кто же «победил»;	в) нечто среднее;	с) чтобы спор разрешился мирно.
146. Я предпочитаю планировать что-либо самостоятель¬но, без вмешательства и предложений со стороны других:
а) да;	в) нечто среднее;	с) нет.
147. Иногда чувство зависти влияет на мои действия:
а) да;	в) не уверен;	с) нет.
148. Я твердо верю, что начальник может быть не все¬гда прав, но он всегда имеет право быть начальником:
а) да;	в) не уверен;	с) нет.
149. Когда я думаю обо всем, что еще предстоит сде¬лать, у меня появляется чувство напряженности:
а) да;	в) иногда;	с) нет.
150. Когда зрители мне что-либо кричат во время игры, меня это не трогает:
а) верно;	в) нечто среднее;	с) неверно.
151. Интереснее быть:
а) художником;	в) не уверен;	с) организатором культурных развлечений.
152. Которое из следующих слов не относится к двум другим:
а) любые;	в) некоторые;	с) большинство.
153. «Пламя» так относится к «жар», как «роза» отно¬сится к:
а) «шип»;	в) «красивые лепестки»;	с) «аромат».
154. У меня бывают яркие сновидения, мешающие мне спать:
а) часто;	в) иногда;	с) практически никогда.
155. Если по пути к успеху стоят серьезные препят¬ствия, я все-таки предпочитаю рискнуть:
а) да;	в) нечто среднее;	с) нет.
156. Когда я нахожусь в группе людей, приступающих к какой-то работе, то само собой получается, что я оказы¬ваюсь во главе их:
а) да;	в) нечто среднее;	с) нет.
157. Мне больше нравится в одежде спокойная кор¬ректность, чем бросающаяся в глаза индивидуальность:
а) верно;	в) не уверен;	с) неверно.
158. Мне больше нравится провести вечер за спокой¬ным любимым занятием, чем в оживленной компании:
а) верно;	в) не уверен;	с) неверно.
159. Я не обращаю внимания на доброжелательные со¬веты других, даже когда эти советы могли бы быть полез¬ными:
а) иногда;	в) почти никогда;	с) никогда.
160. В своих поступках я всегда стараюсь придержи¬ваться общепринятых правил поведения:
а) да;	в) нечто среднее;	с) нет.
161. Мне не очень нравится, когда смотрят, как я работаю:
а) да;	в) нечто среднее;	с) нет.
162. Иногда приходится применять силу, потому что не всегда возможно добиться результата с помощью ут¬верждения:
а) верно;	в) нечто среднее;	с) неверно.
163. В школе я предпочитал (предпочитаю):
а) русский язык и литературу;	в) не уверен;	с) математику или арифметику.
164. Меня иногда огорчало, что обо мне за глаза отзы¬вались неодобрительно без всяких к этому причин:
а) да;	в) не уверен;	с) нет.
165. Разговор с простыми людьми, которые всегда при¬держиваются общепринятых правил и традиций:
а) часто вполне интересен и содержателен;	в) нечто среднее;	с) раздражает меня, потому что ограничивается ме¬лочами.
166. Некоторые вещи настолько раздражают меня, что предпочитаю вообще не говорить на эти темы: 
а) да;	в) нечто среднее;	с) нет.
167. В воспитании важнее:
а) относиться к ребенку с достаточной любовью;	в) нечто среднее;	с) выработать нужные привычки и отношение к жизни.
168. Люди считают меня положительным, спокойным человеком, которого не трогают превратности судьбы:
а) да;	в) нечто среднее;	с) нет.
169. Я считаю, что общество должно руководствоваться ра¬зумом и отбросить старые привычки или ненужные традиции:
а) да;	в) не уверен;	с) нет.
170. Думаю, что в современном мире важнее разрешить:
а) вопросы нравственности;	в) не уверен;	с) разногласия между странами мира.
171. Я лучше усваиваю материал:
а) читая хорошо написанную книгу;	в) нечто среднее;	с) участвуя в обсуждении вопроса.
172. Я предпочитаю идти своим путем вместо того, что¬бы действовать в соответствии с принятыми правилами:
а) верно;	в) не уверен;	с) неверно.
173. Прежде чем выдвигать какой-либо аргумент, я предпочитаю подождать, пока не буду убежден, что я прав:
а) всегда;	в) обычно;	с) только если это целесообразно.
174. Мелочи иногда невыносимо «действуют мне на нервы», хотя я и понимаю, что они не существенны:
а) да;	в) нечто среднее;	с) нет.
175. Под влиянием момента я редко говорю вещи, о которых потом очень сожалею:
а) верно;	в) не уверен;	с) неверно.
176. Если бы меня попросили участвовать в шефской деятельности, то я бы:
а) согласился;	в) не уверен;	с) вежливо сказал, что занят.
177. Которое из следующих слов не относится к двум другим: 
а) широкий;	в) зигзагообразный;	с) прямой.
178. «Скоро» так относится к «никогда», как «близко» к:
а) нигде;	в) далеко;	с) где-то.
179. Если я невольно нарушил правила поведения, на¬ходясь в обществе, то я вскоре забываю об этом:
а) да;	в) нечто среднее;	с) нет.
180. Меня считают человеком, которому обычно в голо¬ву приходят хорошие идеи, когда нужно разрешить какую-либо проблему:
а) да;	в) не уверен;	с) нет.
181. Я способен лучше проявить себя:
а) в трудных ситуациях, когда нужно сохранить са-мообладание;	в) не уверен;	с) когда требуется умение ладить с людьми.
182. Меня считают человеком, полным энтузиазма:
а) да;	в) нечто среднее;	с) нет.
183. Мне нравится работа, которая требует перемен, разнообразия, командировок, даже если она связана с не¬которой опасностью:
а) да;	в) нечто среднее;	с) нет.
184. Я довольно требовательный человек и всегда на¬стаиваю на том, чтобы все делалось по возможности пра¬вильно:
а) верно;	в) нечто среднее;	с) неверно.
185. Мне нравится работа, требующая добросовестного отношения, точных навыков и умений:
а) да;	в) нечто среднее;	с) нет.
186. Я отношусь к типу энергичных людей, которые всегда заняты:
а) да;	в) не уверен;	с) нет.
187. Я уверен в том, что не пропустил ни одного вопро¬са и на все ответил как следует:
а) да;	в) не уверен;	с) нет.
';



include '../database.php';


			$id=$_GET['id'];
			$query="SELECT * FROM test WHERE textid = '$id' OR id='$id'";
			$result=mysql_query($query);
			$r=mysql_fetch_assoc($result);

			$choicesarr=explode(' ', $r['answer']); //создается массив ответов на основе строки ответов из БД
			$choicesstring=$r['answer'];
			$userdata=explode(" ",$r['usr']);//выделяем возраст и пол
			$age=$userdata[2];
			$sex=$userdata[3];
			if ($sex=="мужчина" && intval($age)>=16 && intval($age)<=16) {
				$stenid=$sten2;
			}elseif(intval($age)>=19&&intval($age)<=28){
				$stenid=$sten4;
			}elseif(intval($age)>=29&&intval($age)<=70){
				$stenid=$sten6;
			}
			if($sex=="женщина" && intval($age)>=16 && intval($age)<=16) {
				$stenid=$sten2;
			}elseif(intval($age)>=19&&intval($age)<=28){
				$stenid=$sten4;
			}elseif(intval($age)>=29&&intval($age)<=70){
				$stenid=$sten6;
			}
			$marks="a b c e f g h i l m n o q1 q2 q3 q4";
			$marks2="a b c e f g h i l m n o q1 q2 q3 q4 f1 f2 f3 f4";
			$marks=explode(" ", $marks);
			$marks2=explode(" ", $marks2);
			$markvals2=array();
			foreach ($marks2 as $key => $value) {
			$mark=ucfirst($marks2[$key]);
			array_push($markvals2, $mark);//чисто для вызова литер вторичных признаков
			}
			?>


			 <!--  вывод данных пользователя -->




			<!-- Здесь располагается функция скрывающая - показывающая DIV -->

			<script language="JavaScript" type="text/javascript">
				function show(divid)
				{
					if(document.getElementById(divid).style.display=="none")
					{
						document.getElementById(divid).style.display="inline";
					}
					else
					{
						document.getElementById(divid).style.display="none";
					}
				}
			</script>





			<!-- Ссылка при нажатии на которую скрывается-открывается DIV -->

			<div id ="answerslink"><a onclick="show('choices');"  href="#">Ответы <?=$r['usr'];?></a></div>



			<!-- Здесь сам DIV в котором скрыта информация -->

		<div id="choices" style="DISPLAY: none">
				<?
				$questions=array();
				$regexq = '/[1-9][0-9]?[0-9]?\\D*:/u';
				$regexa = '/.\\)[А-Я 0-9,\\S]*[\\.;]/ui';

																


																/*Нарезка и вывод вопросов и вариантов ответов*/


				preg_match_all($regexq, $text, $questions);
				/*preg_match_all($regexa, $text, $options);*/
				$options=preg_split($regexq, $text);
				/*var_dump($options);*/
				/*echo'</br>';*/
				/*var_dump($questions);*/
				/*echo"</br>";*/
				/*var_dump($options);*/

				$questions=$questions[0];							//нужный элемент массива {0};

				foreach ($questions as $qid => $question) {
					$optionid=$qid+1;
					preg_match_all($regexa, $options[$optionid], $answersarray);
					$answers=$answersarray[0];      //определение выбранного ответа из массива ответов из БД
					$choice=$choicesarr[$qid];
					?>
					<div class="question"><?=$question?>
						<?
						/*	echo $key;*/
						/*	echo "</br>$question</br>";*/
						foreach ($answers as $aid => $answer) {
							?>
							<div class="answer">
								<style>#<?=$choice?>{background-color: red; border-radius: 4px;}</style>
								<p class="answer" id="q<?=$qid?>a<?=$aid?>"><?=$answer?></p>
							</div>	
							<? 
				} ?></div><?
						} ?>
					
				</div>		
			</div>
		</div>
</div>
<div class="results_description">
				<?
				$markvals=array();
				$statvals=array(); //баллы
				$stenvals=array(); //стены
					foreach ($marks as $pos => $value) {
						$mark=ucfirst($marks[$pos]);
						array_push($markvals, $mark);
						$key=$value."keys";
						$key=$$key;
						$stat=getstat($key);
						/*echo "$stat ";*/
						$stats=intval($stat);
						array_push($stat, $statvals);
						/*echo $key , $stenid;*/
						$sten=getsten($stat, $pos, $stenid);
						$sten=intval($sten);
						/*echo "$sten";*/
						if($sten<5.5){
							$percent=$sten*100/5;
						}else{
							$percent=($sten*100/5)-100;
						}

						array_push($stenvals, $sten);
						$description=gettextdescription($sten, $pos);

						?>
					<div class="descfor<?=$markvals[$pos]?>" id="whole_desc" >
						<div class="textdesc"><h3 class="headfor<?=$markvals[$pos]?>" id="desc_header"><?=$description[0]?></h3>
						<p class="textfor<?=$markvals[$pos]?>" id="desc_text"><?=$text=$description[1]?></p></div>
						<div class="scalefor<?=$markvals[$pos]?>" id="desc_scale">
						<div class="indicator_values"><p class="mark"><?echo"$markvals[$pos]"?></p>
							<p class="percents"><?echo "($percent %)"?></p>
						</div>
								<div class="indicator">
									<div class="indicator_bar" style= "width:<?=$percent?>%"></div>
								</div>
								<div class="indicator_bar_fixer"></div>
						</div>
					</div>
					<?}




		

					/*echo $g=getstat($akeys);
					echo getsten($g, 0, $sten2)*/
						for ($i=16; $i < 20; $i++) { 
							$secondaryfactors=array(f1sum($stenvals),f2sum($stenvals),f3sum($stenvals),f4sum($stenvals));
							foreach ($secondaryfactors as $key => $value) {
								array_push($stenvals, $value);
							}
							$description=gettextdescription($stenvals[$i], $i);
							$sum=$stenvals[$i];
							if($sum<5.5){
							$percent=$sum*100/5;
						}else{
							$percent=($sum*100/5)-100;
						}
						
				?>
				<div class="secondary">
					<div class="descfor<?=$markvals2[$i]?>" id="whole_desc" >
						<div class="textdesc"><h3 class="headfor<?=$markvals2[$i]?>" id="desc_header"><?=$description[0]?></h3>
						<p class="textfor<?=$markvals2[$i]?>" id="desc_text"><?=$text=$description[1]?></p></div>
						<div class="scalefor<?=$markvals2[$i]?>" id="desc_scale">
						<div class="indicator_values"><p class="mark"><?echo"$markvals2[$i]"?></p>
							<p class="percents"><?echo "($percent %)"?></p>
						</div>
								<div class="indicator">
									<div class="indicator_bar" style= "width:<?=$percent?>%"></div>
								</div>
								<div class="indicator_bar_fixer"></div>
						</div>
					</div>
				</div>
				<?
					}
				?>
				<div id="myfirstchart" class="profile" style="height: 250px;"></div><br><br>
			<script type="text/javascript">
			new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { mark: "<?=$markvals[0]?>", sten: '1. <?=$markvals[0]?>', value: <?=$stenvals[0]?>},
    { mark: "<?=$markvals[1]?>", sten: '2. <?=$markvals[1]?>', value: <?=$stenvals[1]?>},
    { mark: "<?=$markvals[2]?>", sten: '3. <?=$markvals[2]?>', value: <?=$stenvals[2]?>},
    { mark: "<?=$markvals[3]?>", sten: '4. <?=$markvals[3]?>', value: <?=$stenvals[3]?>},
    { mark: "<?=$markvals[4]?>", sten: '5. <?=$markvals[4]?>', value: <?=$stenvals[4]?>},
    { mark: "<?=$markvals[5]?>", sten: '6. <?=$markvals[5]?>', value: <?=$stenvals[5]?>},
    { mark: "<?=$markvals[6]?>", sten: '7. <?=$markvals[6]?>', value: <?=$stenvals[6]?>},
    { mark: "<?=$markvals[7]?>", sten: '8. <?=$markvals[7]?>', value: <?=$stenvals[7]?>},
    { mark: "<?=$markvals[8]?>", sten: '9. <?=$markvals[8]?>', value: <?=$stenvals[8]?>},
    { mark: "<?=$markvals[9]?>", sten: '10.	<?=$markvals[9]?>', value: <?=$stenvals[9]?>},
    { mark: "<?=$markvals[10]?>", sten: '11. <?=$markvals[10]?>', value: <?=$stenvals[10]?>},
    { mark: "<?=$markvals[11]?>", sten: '12. <?=$markvals[11]?>', value: <?=$stenvals[11]?>},
    { mark: "<?=$markvals[12]?>", sten: '13. <?=$markvals[12]?>', value: <?=$stenvals[12]?>},
    { mark: "<?=$markvals[13]?>", sten: '14. <?=$markvals[13]?>', value: <?=$stenvals[13]?>},
    { mark: "<?=$markvals[14]?>", sten: '15. <?=$markvals[14]?>', value: <?=$stenvals[14]?>},
    { mark: "<?=$markvals[15]?>", sten: '16. <?=$markvals[15]?>', value: <?=$stenvals[15]?>}
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'sten',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['sten value']
});</script>
				</div>
<div id="links"><a href="result.php">Результаты</a></div>
<div id="links"><a href="../../index.php">На главную</a></div>

</body>