<?php
$titles = array(
	'Fudge',
    'Weed Brownies',
	'Sugar Cookies',
	'Chocolate Angelfood Cupcakes',
	'Peanut Brittle',
	'Toasted Marshmallows',
	'Fruit Salad',
	'Cheesecake',
	'Glazed Doughnut',
	'Fortune Cookies',
	'Devils Food Cake',
	'Peanut Butter Cups',
	'Crispy Rice Treats',
	'Cherry Pie',
	'Apple Turnover',
	'Napoleon',
	'Chocolate Chip Cookies',
	'Chocolate Soufflé',
	'Walnut Brownies',
	'Ambrosia Salad',
	'Peach Cobbler',
	'Chocolate Eclair',
	'Chocolate Toaster Tarts',
	'Candied Ginger',
	'Spice Cake',
	'Tapioca Pudding',
	'Banana Pudding',
	'Vanilla Cream Pie   ',
	'Peanut Butter Cookies',
	'Oatmeal Raisin Cookies',
	'Chocolate Mousse',
	'Baklava',
	'Chocolate Fondue',
	'Strawberry Shortcake',
	'Apple Pie a la Mode',
	'Neapolitan Ice Cream',
	'Cinnamon Roll',
	'Gingerbread Cookies',
	'Gingerbread Dude',
	'Bread Pudding   ',
	'Coconut Custard Pie',
	'Coconut Macaroon',
	'Ice Cream Cone',
	'Mint Chocolate Milk Shake',
	'Pecan Pie',
	'Smores',
	'Black Forest Cake',
	'Fruit Cake',
	'Pumpkin Nut Bread',
	'Pumpkin Pie',
	'Pumpkin Ice Cream',
	'Rhubarb Crumble',
	'Carrot Cake',
	'Ice Cream Cake',
	'Baked Alaska',
	'Ice Cream Sandwich',
	'Hot Fudge Sundae',
	'Pecan Praline Ice Cream',
	'Banana Split',
	'Boston Cream Pie',
	'Banana Bread',
	'Chocolate Layer Cake',
	'Shortbread Cookies',
	'Oreo Cookies',
	'Pop Tarts',
);

$styleInner = 'style="float: left; width: 150px; border: 1px solid black;
text-align: center;"';

$styleOuter = 'style="float: left; width: 900px;"';

echo "<div $styleOuter>";

for ($x = 0; $x < 65; $x++) {
    
  echo "<div $styleInner>";
    echo $titles[$x];
    echo '</div>';
    echo PHP_EOL;
   
}
echo '</div>';

