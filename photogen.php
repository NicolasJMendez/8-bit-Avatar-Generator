<?php
//set error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

//gender from user input if wanted
$gender = 'M';

if ($gender == 'M') {//male
	//assign file names to arrays for males
	$backgrounds = ['background1.png','background2.png','background3.png','background4.png','background5.png'];
	$faces = ['face1.png','face4.png','unfiltered-face2.png','unfiltered-face3.png'];
	$hair = ['hair1.png','hair2.png','hair3.png','hair4.png','hair5.png','hair6.png','hair7.png','hair8.png','hair9.png','hair10.png','hair11.png','unfiltered-hair12.png','hair13.png','hair14.png','hair15.png','hair16.png','hair17.png','hair18.png','hair19.png','hair20.png','hair21.png','hair22.png','hair23.png','hair24.png','hair25.png','hair26.png','hair27.png','hair28.png','hair29.png','hair30.png','hair31.png','hair32.png','hair33.png','hair34.png','hair35.png','hair36.png'];
	$eyes = ['eye1.png','eye2.png','eye3.png','eye4.png','eye5.png','eye6.png','eye7.png','eye8.png','eye9.png','eye10.png','eye11.png','eye12.png','eye13.png','eye14.png','eye15.png','eye16.png','eye17.png','eye18.png','eye19.png','eye20.png','eye21.png','eye22.png','eye23.png','eye24.png','eye25.png','eye26.png','eye27.png','eye28.png','eye29.png','eye30.png','eye31.png','eye32.png'];
	$clothes = ['clothes1.png','clothes2.png','clothes3.png','clothes4.png','clothes5.png','clothes6.png','clothes7.png','clothes8.png','clothes9.png','clothes10.png','clothes11.png','clothes12.png','clothes13.png','clothes14.png','clothes15.png','clothes16.png','clothes17.png','clothes18.png','clothes19.png','clothes20.png','clothes21.png','clothes22.png','clothes23.png','clothes24.png','clothes25.png','clothes26.png','clothes27.png','clothes28.png','clothes29.png','clothes30.png','clothes31.png','clothes32.png','clothes33.png','clothes34.png','clothes35.png','clothes36.png','clothes37.png','clothes38.png','clothes39.png','clothes40.png','clothes41.png','clothes42.png','clothes43.png','clothes44.png','clothes45.png','clothes46.png','clothes47.png','clothes48.png','clothes49.png','clothes50.png','clothes51.png','clothes52.png','clothes53.png','clothes54.png','clothes55.png','clothes56.png','clothes57.png','clothes58.png','clothes59.png','clothes60.png','clothes61.png','clothes62.png','clothes63.png','clothes64.png','clothes65.png'];
	$mouth = ['mouth1.png','mouth2.png','mouth3.png','mouth4.png','mouth5.png','mouth6.png','mouth7.png','mouth8.png','mouth9.png','mouth10.png','mouth11.png','mouth12.png','mouth13.png','mouth14.png','mouth15.png','mouth16.png','mouth17.png','mouth18.png','unfiltered-mouth19.png','mouth20.png','mouth21.png','mouth22.png','mouth23.png','mouth24.png','unfiltered-mouth25.png'];
	//build image links with randomly generated images
	$img1 = 'img/male/background/'.$backgrounds[rand(0, 4)];
	$img2 = 'img/male/face/'.$faces[rand(0, 3)];
	$img3 = 'img/male/hair/'.$hair[rand(0, 35)];
	$img4 = 'img/male/eyes/'.$eyes[rand(0, 31)];
	$img5 = 'img/male/clothes/'.$clothes[rand(0, 64)];
	$img6 = 'img/male/mouth/'.$mouth[rand(0, 24)];
}else{//female
	//assign file names to arrays for females
	$backgrounds = ['background1.png','background2.png','background3.png','background4.png','background5.png'];
	$faces = ['face1.png','face3.png','unfiltered-face2.png','unfiltered-face4.png'];
	$hair = ['head1.png','head2.png','head3.png','head4.png','head5.png','head6.png','head7.png','head8.png','head9.png','head10.png','head11.png','head12.png','head13.png','head14.png','head15.png','head16.png','head17.png','head18.png','head19.png','head20.png','head21.png','head22.png','head23.png','head24.png','head25.png','head26.png','head27.png','unfiltered-head28.png','head29.png','head30.png','head31.png','head32.png','head33.png'];
	$eyes = ['eye1.png','eye2.png','eye3.png','eye4.png','eye5.png','eye6.png','eye7.png','eye8.png','eye9.png','eye10.png','eye11.png','eye12.png','eye13.png','eye14.png','eye15.png','eye16.png','eye17.png','eye18.png','eye19.png','eye20.png','eye21.png','eye22.png','eye23.png','eye24.png','eye25.png','eye26.png','eye27.png','eye28.png','eye29.png','eye30.png','eye31.png','eye32.png','eye33.png','eye34.png','eye35.png','eye36.png','eye37.png','eye38.png','eye39.png','eye40.png','eye41.png','eye42.png','eye43.png','eye44.png','eye45.png','eye46.png','eye47.png','eye48.png','eye49.png','eye50.png','eye51.png','eye52.png','eye53.png'];
	$clothes = ['clothes1.png','clothes2.png','clothes3.png','clothes4.png','clothes5.png','clothes6.png','clothes7.png','clothes8.png','clothes9.png','clothes10.png','clothes11.png','clothes12.png','clothes13.png','clothes14.png','clothes15.png','clothes16.png','clothes17.png','clothes18.png','clothes19.png','clothes20.png','clothes21.png','clothes22.png','clothes23.png','clothes24.png','clothes25.png','clothes26.png','clothes27.png','clothes28.png','clothes29.png','clothes30.png','clothes31.png','clothes32.png','clothes33.png','clothes34.png','clothes35.png','clothes36.png','clothes37.png','clothes38.png','clothes39.png','clothes40.png','clothes41.png','clothes42.png','clothes43.png','clothes44.png','clothes45.png','clothes46.png','clothes47.png','clothes48.png','clothes49.png','clothes50.png','clothes51.png','clothes52.png','clothes53.png','clothes54.png','clothes55.png','clothes56.png','clothes57.png','clothes58.png','clothes59.png'];
	$mouth = ['mouth1.png','mouth2.png','mouth3.png','mouth4.png','mouth5.png','mouth6.png','mouth7.png','mouth8.png','mouth9.png','mouth10.png','mouth11.png','mouth12.png','mouth13.png','unfiltered-mouth14.png','mouth15.png','mouth16.png','mouth17.png'];
	//build image links with randomly generated images
	$img1 = 'img/female/background/'.$backgrounds[rand(0, 4)];
	$img2 = 'img/female/face/'.$faces[rand(0, 3)];
	$img3 = 'img/female/hair/'.$hair[rand(0, 32)];
	$img4 = 'img/female/eyes/'.$eyes[rand(0, 52)];
	$img5 = 'img/female/clothes/'.$clothes[rand(0, 58)];
	$img6 = 'img/female/mouth/'.$mouth[rand(0, 16)];
}
// Create an image identifier for each image used
$image_1 = imagecreatefrompng($img1); //background
$image_2 = imagecreatefrompng($img2); //face
$image_3 = imagecreatefrompng($img3); //hair
$image_4 = imagecreatefrompng($img4); //eyes
$image_5 = imagecreatefrompng($img5); //clothes
$image_6 = imagecreatefrompng($img6); //mouth

//flaten images
imagecopy($image_1, $image_2, 0, 0, 0, 0, 400, 400);
imagecopy($image_1, $image_3, 0, 0, 0, 0, 400, 400);
imagecopy($image_1, $image_4, 0, 0, 0, 0, 400, 400);
imagecopy($image_1, $image_5, 0, 0, 0, 0, 400, 400);
imagecopy($image_1, $image_6, 0, 0, 0, 0, 400, 400);

//output to browser window
header('Content-Type: image/png');
imagepng($image_1);

// save file to location on server

// imagepng($image_1, 'final_img.png');
























// $face = imagecreatefrompng('imggen/img/male/face/face1.png');
// $hair = imagecreatefrompng('imggen/img/male/hair/hair3.png');

// imagealphablending($face, false);
// imagesavealpha($face, true);

// imagealphablending($hair, false);
// imagesavealpha($hair, true);

// imagecopymerge($face, $hair, 10, 9, 0, 0, 181, 180, 100); //have to play with these numbers for it to work for you, etc.

// header('Content-Type: image/png');
// imagepng($face);
// imagedestroy($face);
// imagedestroy($hair);
?>
