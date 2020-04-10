# Usable-Web-Components

# Cards

<h5>1. a card that i made in 4-1 for our final year project "vashaShikkha". note that there is no js used, to update progress bar or to change color of the heart when a topic is added to favourite should be handled with js</h5>

<img src="https://github.com/Waqar-107/Usable-Web-Components/blob/master/assets_for_readme/c1.PNG" height="200px" width="150px">

<h5>2. a card that can be used as actual card for a particular.

idea is taken from-> https://codepen.io/FrankieDoodie/pen/NOJpVX though the codes are different to a great extent

</h5>

<img src="https://github.com/Waqar-107/Usable-Web-Components/blob/master/assets_for_readme/c2.gif" height="200" width="500">

# Hamburger Menu

1. from => https://www.youtube.com/watch?v=DZg6UfS5zYg

i have also converted it into react component with jss. use it like -> <i>\<HamburgerMenu/></i>

<img src="https://github.com/Waqar-107/Usable-Web-Components/blob/master/assets_for_readme/ham1.gif" width="250" height="300" />

# utility-codes

1. give the name of the table and database and you will get the data in csv
   use <i>php database_to_csv.php</i> to execute

# Notes

1. when sending array using FormData from front-end to back-end, do:
`formData.append('tag', JSON.stringify(tags));` in the front and `new_paper.tag = JSON.parse(req.body.tag);` in the back
