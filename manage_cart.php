<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST['Add_To_Cart']))
	{
		if(isset($_SESSION['cart']))
		{
			$myitems=array_column($_SESSION['cart'],'Item_Name');
			if(in_array($_POST['Item_Name'],$myitems))
			{
				echo"<script>
					alert('Item Already Added');
					window.location.href='groceries.php';
				</script>";
			}
			else
			{
				$count=count($_SESSION['cart']);
				$_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'APrice'=>$_POST['APrice'],'FPrice'=>$_POST['FPrice'],'BBPrice'=>$_POST['BBPrice'],'RDPrice'=>$_POST['RDPrice'],'Alink'=>$_POST['Alink'],'Flink'=>$_POST['Flink'],'Blink'=>$_POST['Blink'],'Rlink'=>$_POST['Rlink']);
				echo"<script>
					alert('Item Added');
					window.location.href='groceries.php';
				</script>";
			}
		}
		else
		{
			$_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'APrice'=>$_POST['APrice'],'FPrice'=>$_POST['FPrice'],'BBPrice'=>$_POST['BBPrice'],'RDPrice'=>$_POST['RDPrice'],'Alink'=>$_POST['Alink'],'Flink'=>$_POST['Flink'],'Blink'=>$_POST['Blink'],'Rlink'=>$_POST['Rlink']);
			echo"<script>
				alert('Item Added');
				window.location.href='groceries.php';
			</script>";
		}
	}
	if(isset($_POST['Remove_Item']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($value['Item_Name']==$_POST['Item_Name'])
			{
				unset($_SESSION['cart'][$key]);
				$_SESSION['cart']= array_values($_SESSION['cart']);
				echo"<script>
					alert('Item Removed');
					window.location.href='cart.php';
				</script>";
			}
		}
	}
	if(isset($_POST['APrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['APrice']==279)
		{
			echo"<script>
				window.location.href='https://www.amazon.in/PONDS-Moisturing-Vaseline-Intensive-Lotion/dp/B01L1Y68JK/ref=asc_df_B01L1Y68JK/?tag=googleshopdes-21&linkCode=df0&hvadid=396984372135&hvpos=&hvnetw=g&hvrand=12943100330511462711&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9062162&hvtargid=pla-1022017717416&psc=1&ext_vrnc=hi';
			</script>";
		}
		}
	}
	if(isset($_POST['FPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['FPrice']==306)
		{
			echo"<script>
				window.location.href='https://www.flipkart.com/ponds-cold-cream-200-ml/p/itm458e4675808a7?pid=FRNFH2GVCPZVND9E&lid=LSTFRNFH2GVCPZVND9ELJES26&marketplace=FLIPKART&cmpid=content_fairness_14498130132_u_8965229628_gmc_pla&tgi=sem,1,G,11214002,u,,,543116155366,,,,c,,,,,,,&ef_id=CjwKCAiArOqOBhBmEiwAsgeLmc7Z0WIKCqxDphFFeAAs2pZvBMM3RSCJr08miXR_jInijAHOarwYpBoCjekQAvD_BwE:G:s&s_kwcid=AL!739!3!543116155366!!!u!819272885261!&gclid=CjwKCAiArOqOBhBmEiwAsgeLmc7Z0WIKCqxDphFFeAAs2pZvBMM3RSCJr08miXR_jInijAHOarwYpBoCjekQAvD_BwE&gclsrc';
			</script>";
		}
		}
	}
	if(isset($_POST['BBPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['BBPrice']==349)
			{
				echo"<script>
				window.location.href='https://www.bigbasket.com/pd/40053503/ponds-cold-cream-for-soft-glowing-skin-provides-nourishment-protection-200-ml/?nc=sis-prod-list&t_pg=siscategory&t_p=sis-template-1&t_s=sis-prod-list&t_pos=2&t_ch=desktop';
			</script>";
			}
		}
	}
	if(isset($_POST['APrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['APrice']==145)
		{
			echo"<script>
				window.location.href='https://www.amazon.in/Red-Label-Nahttps://www.atural-Care-250g/dp/B00NYZRAMO/ref=sr_1_3?keywords=red+label+tea+-+natural+care%2C+250g&qid=1641737111&sr=8-3';
			</script>";
		}
		}
	}
	if(isset($_POST['FPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['FPrice']==239)
		{
			echo"<script>
				window.location.href='https://www.flipkart.com/red-label-brooke-bond-natural-care-tea-tulsi-cardamom-ginger-bags-box/p/itm1c5015bc0ee5b?pid=TEAG2UAEHUZYANXB&lid=LSTTEAG2UAEHUZYANXBU8I0UK&marketplace=FLIPKART&q=Red+Label+Tea+-+Natural+Care%2C+250+g&store=eat%2Ffpm&srno=s_1_3&otracker=search&otracker1=search&fm=SEARCH&iid=92963cce-9853-4d80-9340-892d0daa96ff.TEAG2UAEHUZYANXB.SEARCH&ppt=sp&ppn=sp&ssid=fn1npm9ths0000001641737053957&qH=8ab0b08a76851bf3';
			</script>";
		}
		}
	}
	if(isset($_POST['BBPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['BBPrice']==157)
			{
				echo"<script>
				window.location.href='https://www.bigbasket.com/pd/266615/red-label-tea-natural-care-250-g/?nc=Best%20Sellers&t_pg=/jan-t1-home-page/&t_p=jan-t1-2022&t_s=Best%20Sellers&t_pos_sec=5&t_pos_item=1&t_ch=desktop';
			</script>";
			}
		}
	}
	if(isset($_POST['APrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['APrice']==340)
		{
			echo"<script>
				window.location.href='https://www.amazon.in/GRB-Pure-Ghee-Purity-16-90/dp/B00D9D16RG/ref=asc_df_B00D9D16RG/?tag=googleshopdes-21&linkCode=df0&hvadid=435786221917&hvpos=&hvnetw=g&hvrand=6597240985985778050&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9062162&hvtargid=pla-944927568951&psc=1&ext_vrnc=hi';
			</script>";
		}
		}
	}
	if(isset($_POST['FPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['FPrice']==359)
		{
			echo"<script>
				window.location.href='https://www.flipkart.com/grb-cow-ghee-500-ml-plastic-bottle/p/itmf72uu2hstrard?pid=GHEF72UUQXWFHYVG&lid=LSTGHEF72UUQXWFHYVGPPLOTV&marketplace=FLIPKART&cmpid=content_ghee_14498130132_u_8965229628_gmc_pla&tgi=sem,1,G,11214002,u,,,543116155366,,,,c,,,,,,,&ef_id=CjwKCAiArOqOBhBmEiwAsgeLmfjsrhV775iYuXb23bVu4ykzktKcYEQ4_Bxunlsma7iQivWH1RGxQBoC0r8QAvD_BwE:G:s&s_kwcid=AL!739!3!543116155366!!!u!297150742451!&gclid=CjwKCAiArOqOBhBmEiwAsgeLmfjsrhV775iYuXb23bVu4ykzktKcYEQ4_Bxunlsma7iQivWH1RGxQBoC0r8QAvD_BwE';
			</script>";
		}
		}
	}
	if(isset($_POST['BBPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['BBPrice']==301)
			{
				echo"<script>
				window.location.href='https://www.bigbasket.com/pd/252423/grb-ghee-500-ml-pouch/?nc=sis-prod-list&t_pg=siscategory&t_p=sis-template-1&t_s=sis-prod-list&t_pos=2&t_ch=desktop';
			</script>";
			}
		}
	}
	if(isset($_POST['APrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['APrice']==151)
		{
			echo"<script>
				window.location.href='https://www.amazon.in/Fortune-Sunlite-Refined-Sunflower-Oil/dp/B00NYZTGEO/ref=sr_1_3_0g_fs?almBrandId=ctnow&crid=QJL3C6VA69XZ&fpw=alm&keywords=freedom+refined+oil+-+sunflower%2C+1l+pouch&qid=1641738105&s=grocery&sprefix=freedom+refined+oil+-+sunflower%2C+1+l+pouch%2Cgrocery%2C538&sr=1-3';
			</script>";
		}
		}
	}
	if(isset($_POST['FPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['FPrice']==132)
		{
			echo"<script>
				window.location.href='https://www.flipkart.com/fortune-sunlite-refined-sunflower-oil-pouch/p/itmcd35e608db062?pid=EDOET83C9UHNFETC&lid=LSTEDOET83C9UHNFETCV6SSOO&marketplace=GROCERY&cmpid=content_edible-oil_14498130132_u_8965229628_gmc_pla&tgi=sem,1,G,11214002,u,,,543116155366,,,,c,,,,,,,&ef_id=CjwKCAiArOqOBhBmEiwAsgeLmYIci-1hAVPZxiv25vWkHH6e0E06WPuukj_LI4w9-E0SRmCCDeqTaRoClQ4QAvD_BwE:G:s&s_kwcid=AL!739!3!543116155366!!!u!317913278533!&gclid=CjwKCAiArOqOBhBmEiwAsgeLmYIci-1hAVPZxiv25vWkHH6e0E06WPuukj_LI4w9-E0SRmCCDeqTa';
			</script>";
		}
		}
	}
	if(isset($_POST['BBPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['BBPrice']==140)
			{
				echo"<script>
				window.location.href='https://www.bigbasket.com/pd/274145/fortune-sun-lite-sunflower-refined-oil-1-l-pouch/?nc=l3category&t_pg=L3Categories&t_p=l3category&t_s=l3category&t_pos=3&t_ch=desktop';
			</script>";
			}
		}
	}
	if(isset($_POST['APrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['APrice']==21600)
		{
			echo"<script>
				window.location.href='https://www.amazon.in/Samsung-inches-Ready-UA32T4350AKXXL-Glossy/dp/B0856SSZH3/ref=sr_1_1?keywords=Samsung+80+cm+%2832+inch%29+HD+Ready+LED+Smart+TV%2C+Series+4+32T4900&qid=1641740040&s=electronics&sr=1-1';
			</script>";
		}
		}
	}
	if(isset($_POST['FPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['FPrice']==26900)
		{
			echo"<script>
				window.location.href='https://www.flipkart.com/samsung-series-4-80-cm-32-inch-hd-ready-led-tv/p/itmf5xzyyjqwmfxd?pid=TVSF5XZYAFWGACK6&lid=LSTTVSF5XZYAFWGACK6MA4PZC&marketplace=FLIPKART&q=Samsung+80+cm+%2832+inch%29+HD+Ready+LED+Smart+TV%2C+Series+4+32T4900&store=ckf%2Fczl&srno=s_1_3&otracker=search&otracker1=search&fm=SEARCH&iid=2fe8fba6-a153-43d4-91d9-559f57d13168.TVSF5XZYAFWGACK6.SEARCH&ppt=pp&ppn=pp&ssid=0dbias4bmo0000001641740072703&qH=c8b16e4c0df845c1';
			</script>";
		}
		}
	}
	if(isset($_POST['RDPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['RDPrice']==25490)
			{
				echo"<script>
				window.location.href='https://www.reliancedigital.in/samsung-80-cm-32-inch-hd-ready-led-smart-tv-series-4-32t4900/p/492338610';
			</script>";
			}
		}
	}
	if(isset($_POST['APrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['APrice']==799)
		{
			echo"<script>
				window.location.href='https://www.amazon.in/255-Bluetooth-Wireless-Earphone-Immersive/dp/B07C2VJXP4/ref=asc_df_B07C2VJXP4/?tag=googleshopdes-21&linkCode=df0&hvadid=396985237644&hvpos=&hvnetw=g&hvrand=15702730801487080685&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9062162&hvtargid=pla-537431266793&psc=1&ext_vrnc=hi';
			</script>";
		}
		}
	}
	if(isset($_POST['FPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['FPrice']==899)
		{
			echo"<script>
				window.location.href='https://www.flipkart.com/boat-rockerz-255f-bluetooth-headset/p/itmd35e57aca99fb?pid=ACCF6SZ8EFWFEPZ6&lid=LSTACCF6SZ8EFWFEPZ6NDXHEI&marketplace=FLIPKART&cmpid=content_headphone_14498130132_u_8965229628_gmc_pla&tgi=sem,1,G,11214002,u,,,543116155366,,,,c,,,,,,,&ef_id=CjwKCAiArOqOBhBmEiwAsgeLmUjIOFzMCSWdZ129F6X7kjJdnH2dhIJLokLwQsOKQnkxwFCNHg7CrRoC2j4QAvD_BwE:G:s&s_kwcid=AL!739!3!543116155366!!!u!514011614152!&gclid=CjwKCAiArOqOBhBmEiwAsgeLmUjIOFzMCSWdZ129F6X7kjJdnH2dhIJLokLwQsOKQnkxwFCNHg7CrRoC2j4QA';
			</script>";
		}
		}
	}
	if(isset($_POST['RDPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['RDPrice']==799)
			{
				echo"<script>
				window.location.href='https://www.reliancedigital.in/boat-rockerz-255-sports-bluetooth-wireless-earphone-with-immersive-stereo-sound-and-hands-free-mic-black/p/491893324';
			</script>";
			}
		}
	}
	if(isset($_POST['APrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['APrice']==59990)
		{
			echo"<script>
				window.location.href='https://www.amazon.in/Lenovo-Keyboard-Fingerprint-Graphite-82LM009AIN/dp/B096SJSQN7';
			</script>";
		}
		}
	}
	if(isset($_POST['FPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['FPrice']==53990)
		{
			echo"<script>
				window.location.href='https://www.flipkart.com/lenovo-ideapad-ryzen-5-hexa-core-5500u-8-gb-512-gb-ssd-windows-10-home-15alc05-thin-light-laptop/p/itmb40d8df64d9d1?pid=COMG5UZBFZVTYRFN&lid=LSTCOMG5UZBFZVTYRFNCVGBQG&marketplace=FLIPKART&cmpid=content_computer_8965229628_gmc';
			</script>";
		}
		}
	}
	if(isset($_POST['RDPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['RDPrice']==61799)
			{
				echo"<script>
				window.location.href='https://www.reliancedigital.in/lenovo-k0in-ideapad-slim-5i-laptop-11th-gen-intel-core-i5-1135g7-8gb-512gb-ssd-intel-iris-xe-graphics-windows-10-mso-fhd-35-56-cm-14-inch-/p/491947203?gclid=CjwKCAiA55mPBhBOEiwANmzoQlV_TlAGP9zSpEIhFubVik9L_t-Ry5CeCuKMsWya2PpCfGpbMpK9QBoCtf0QAvD_BwE';
			</script>";
			}
		}
	}
	if(isset($_POST['APrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['APrice']==53990)
		{
			echo"<script>
				window.location.href='https://www.amazon.in/Canon-EOS-200D-II-Digital/dp/B07RJWB548/ref=asc_df_B07RJWB548/?tag=googleshopdes-21&linkCode=df0&hvadid=397079061029&hvpos=&hvnetw=g&hvrand=9527178776451819915&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9062162&hvtargid=pla-813665167087&psc=1&ext_vrnc=hi';
			</script>";
		}
		}
	}
	if(isset($_POST['FPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['FPrice']==53999)
		{
			echo"<script>
				window.location.href='https://www.flipkart.com/canon-eos-200d-ii-dslr-camera-ef-s18-55mm-stm/p/itm5d6e44f7fd976?pid=DLLFFNVDYGQN9XCS&lid=LSTDLLFFNVDYGQN9XCSDPECPX&marketplace=FLIPKART&cmpid=content_dslr-camera_14498130132_u_8965229628_gmc_pla&tgi=sem,1,G,11214002,u,,,543116155366,,,,c,,,,,,,&ef_id=CjwKCAiArOqOBhBmEiwAsgeLmcUbBdxOaB-6zmdvi0fX5Yj83smryWAn9l0a0rduuor0vfInMGYjFxoCu20QAvD_BwE:G:s&s_kwcid=AL!739!3!543116155366!!!u!300816474196!&gclid=CjwKCAiArOqOBhBmEiwAsgeLmcUbBdxOaB-6zmdvi0fX5Yj83smryWAn9l0a0rduuor0vfInM';
			</script>";
		}
		}
	}
	if(isset($_POST['RDPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['RDPrice']==56990)
			{
				echo"<script>
				window.location.href='https://www.reliancedigital.in/canon-eos-200d-ii-dslr-camera-with-18-55-mm-lens-kit/p/491431412';
			</script>";
			}
		}
	}
	if(isset($_POST['APrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['APrice']==22)
		{
			echo"<script>
				window.location.href='https://www.amazon.in/Tata-Salt-1kg/dp/B07575FPC3/ref=sr_1_5_0o_fs?almBrandId=ctnow&crid=3IOIP31HKYSD5&fpw=alm&keywords=salt&qid=1642832976&sprefix=salt%2Caps%2C234&sr=8-5';
			</script>";
		}
		}
	}
	if(isset($_POST['FPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['FPrice']==19)
		{
			echo"<script>
				window.location.href='https://www.flipkart.com/tata-iodized-salt/p/itmevbfcjfnsga5j?pid=SATET96PTFPYSQWM&lid=LSTSATET96PTFPYSQWMA7IJSD&marketplace=GROCERY&q=salt&store=eat%2F5ht&spotlightTagId=BestsellerId_eat%2F5ht&srno=s_1_3&otracker=search&otracker1=search&fm=SEARCH&iid=cb343b7f-1e5d-4463-8ea6-037906bc7243.SATET96PTFPYSQWM.SEARCH&ppt=sp&ppn=sp&ssid=hed6zesg5c0000001642828134427&qH=ceb20772e0c9d240';
				</script>";
		}
		}
	}
	if(isset($_POST['BBPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['BBPrice']==22.22)
			{
				echo"<script>
				window.location.href='https://www.bigbasket.com/pd/241600/tata-salt-iodized-1-kg-pouch/?z=MzE0OTkyNTYyNg&utm_source=google&utm_medium=cpc&utm_campaign=Visakhapatnam-PLA/&gclid=CjwKCAiA0KmPBhBqEiwAJqKK40kAQl4JLXUCBBnhP53ILEG7P9s5bwUvDumId2oE7kOKcMl4p1bu6BoCLmUQAvD_BwE';
				</script>";
			}
		}
	}
	if(isset($_POST['APrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['APrice']==16740)
		{
			echo"<script>
				window.location.href='https://www.amazon.in/Whirlpool-7-5-Fully-Automatic-ROYAL-PLUS/dp/B082FJ9RS7/ref=sr_1_9?crid=26ME72V0334ZC&keywords=washing+machine+whirlpool&qid=1642827715&sprefix=washing+machine+whirlpool%2Caps%2C245&sr=8-9';
				</script>";
		}
		}
	}
	if(isset($_POST['FPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['FPrice']==16740)
		{
			echo"<script>
				window.location.href='https://www.flipkart.com/whirlpool-7-5-kg-5-star-hard-water-wash-fully-automatic-top-load-grey/p/itmb49b34c9eb10d?pid=WMNFNAYP4RHJX5GN&lid=LSTWMNFNAYP4RHJX5GNC91M6Q&marketplace=FLIPKART&q=washing+machines&store=j9e%2Fabm%2F8qx&srno=s_1_10&otracker=AS_QueryStore_OrganicAutoSuggest_1_15_na_na_na&otracker1=AS_QueryStore_OrganicAutoSuggest_1_15_na_na_na&fm=SEARCH&iid=62fd555b-a4dc-4668-9647-66f8a14034ea.WMNFNAYP4RHJX5GN.SEARCH&ppt=hp&ppn=homepage&ssid=bh9wir37s00000001642827744631&qH=bcadf718d561cab9';
				</script>";
		}
		}
	}
	if(isset($_POST['RDPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['RDPrice']==18990)
			{
				echo"<script>
				window.location.href='https://www.reliancedigital.in/whirlpool-7-5-kg-5-star-fully-automatic-top-loading-washing-machine-whitemagic-elite-7-5-grey-hard-water-wash-/p/491604539?gclid=CjwKCAiA0KmPBhBqEiwAJqKK47JMbYJ1XxqWah4dIUPRO05odhClHpN_oKFzP64Nxdn08_ekEBw-0RoCdNEQAvD_BwE';
			</script>";
			}
		}
	}
	if(isset($_POST['APrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['APrice']==26379)
		{
			echo"<script>
				window.location.href='https://www.amazon.in/Whirlpool-Refrigerator-263D-PROTTON-ROY/dp/B07V3MHBFQ/ref=asc_df_B07V3MHBFQ/?tag=googleshopdes-21&linkCode=df0&hvadid=396988105878&hvpos=&hvnetw=g&hvrand=8303025494313205717&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9062162&hvtargid=pla-818824351428&psc=1&ext_vrnc=hi';
				</script>";
		}
		}
	}
	if(isset($_POST['FPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['FPrice']==25490)
		{
			echo"<script>
				window.location.href='https://www.flipkart.com/whirlpool-240-l-frost-free-triple-door-refrigerator/p/itmf7z5vhfcxysvp?pid=RFRF3HZZZYTNKSCU&lid=LSTRFRF3HZZZYTNKSCUP3QG6B&marketplace=FLIPKART&cmpid=content_refrigerator-new_8965229628_gmc';
				</script>";
		}
		}
	}
	if(isset($_POST['RDPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['RDPrice']==35150)
			{
				echo"<script>
				window.location.href='https://www.reliancedigital.in/whirlpool-protton-240l-frost-free-triple-door-refrigerator-6th-sense-activefresh-technology-alpha-steel-10-years-warranty-/p/491391984';
			</script>";
			}
		}
	}
	if(isset($_POST['APrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['APrice']==2799)
		{
			echo"<script>
				window.location.href='https://www.amazon.in/Havells-Instanio-3000-Watt-Instant-Heater/dp/B075GXGD9P/ref=asc_df_B075GXGD9P/?tag=googleshopdes-21&linkCode=df0&hvadid=396987075093&hvpos=&hvnetw=g&hvrand=15242819666898102096&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9062162&hvtargid=pla-469711231677&psc=1&ext_vrnc=hi';
				</script>";
		}
		}
	}
	if(isset($_POST['FPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['FPrice']==4750)
		{
			echo"<script>
				window.location.href='https://www.flipkart.com/havells-3-l-instant-water-geyser-instanio-3l-white-blue-white-blue/p/itm84118736acf48?pid=WGYFHKG8BFFKZYJE&lid=LSTWGYFHKG8BFFKZYJETXFW6O&marketplace=FLIPKART&cmpid=content_water-geyser_8965229628_gmc';
				</script>";
		}
		}
	}
	if(isset($_POST['RDPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['RDPrice']==3799)
			{
				echo"<script>
				window.location.href='https://www.reliancedigital.in/havells-3-litres-instant-water-heater-with-colour-changing-led-indicator-instanio/p/491281703?gclid=CjwKCAiA0KmPBhBqEiwAJqKK42hNqTC3lN3fZqK-aHr8mzUPg66jkzBYxo2rDokwao8wTp1xZW6lQBoCBs8QAvD_BwE';
			</script>";
			}
		}
	}
	if(isset($_POST['APrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['APrice']==13990)
		{
			echo"<script>
				window.location.href='https://www.amazon.in/Vivo-Y21-Diamond-Additional-Exchange/dp/B08ZJQ6QM9/ref=asc_df_B08ZJQ6QM9/?tag=googleshopdes-21&linkCode=df0&hvadid=545016361145&hvpos=&hvnetw=g&hvrand=9456321083441741270&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9062162&hvtargid=pla-1423989188785&psc=1';
				</script>";
		}
		}
	}
	if(isset($_POST['FPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['FPrice']==13990)
		{
			echo"<script>
				window.location.href='https://www.flipkart.com/vivo-y21-diamond-glow-64-gb/p/itmf123866f9d6dd?pid=MOBG5VFCHSKUZMMG&lid=LSTMOBG5VFCHSKUZMMGNGWHG6&marketplace=FLIPKART&q=VIVO+Y21+64+GB%2C+4+GB+RAM%2C+Diamond+Glow+Smartphone&store=tyy%2F4io&srno=s_1_1&otracker=search&otracker1=search&fm=SEARCH&iid=6aa97236-9a91-4401-8503-5d8b1b87e215.MOBG5VFCHSKUZMMG.SEARCH&ppt=pp&ppn=pp&ssid=ceylvsya000000001642829592412&qH=5f0cf1344042a578';
				</script>";
		}
		}
	}
	if(isset($_POST['RDPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['RDPrice']==13990)
			{
				echo"<script>
				window.location.href='https://www.reliancedigital.in/vivo-y21-64-gb-4-gb-ram-diamond-glow-smartphone/p/491998267?gclid=CjwKCAiA0KmPBhBqEiwAJqKK41i3UTCmdML-YuHKVUHjy0V0PO4cQ71W_N1aj774aKwF1sK_HboJjhoCigIQAvD_BwE';
			</script>";
			}
		}
	}
	if(isset($_POST['APrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['APrice']==12499)
		{
			echo"<script>
				window.location.href='https://www.amazon.in/Redmi-10-Prime-extendable-Adaptive/dp/B09CTZK1V9/ref=sr_1_5?crid=3VHYN9Z5MTYMY&keywords=redmi+10+prime&qid=1642830345&sprefix=redmi+10+%2Caps%2C382&sr=8-5';
				</script>";
		}
		}
	}
	if(isset($_POST['FPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['FPrice']==15790)
		{
			echo"<script>
				window.location.href='https://www.flipkart.com/redmi-10-prime-bifrost-blue-128-gb/p/itm9377b4c936baa?pid=MOBG6PB47FHHGTZN&lid=LSTMOBG6PB47FHHGTZNSOKHAJ&marketplace=FLIPKART&q=redmi+10+prime+mobile&store=tyy%2F4io&srno=s_1_5&otracker=AS_Query_OrganicAutoSuggest_3_6_na_na_na&otracker1=AS_Query_OrganicAutoSuggest_3_6_na_na_na&fm=SEARCH&iid=71900a0c-32de-4d3f-a335-a3a3f71fd565.MOBG6PB47FHHGTZN.SEARCH&ppt=hp&ppn=homepage&ssid=dzg5aop0hc0000001642830374684&qH=f7fc00e358dc5c8d';
				</script>";
		}
		}
	}
	if(isset($_POST['RDPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['RDPrice']==14999)
			{
				echo"<script>
				window.location.href='https://www.reliancedigital.in/xiaomi-redmi-10-prime-128-gb-6-gb-ram-bifrost-blue-smartphone/p/491997815';
			</script>";
			}
		}
	}
	if(isset($_POST['APrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['APrice']==2299)
		{
			echo"<script>
				window.location.href='https://www.amazon.in/Noise-Colorfit-Pro-Touch-Control/dp/B07YY1BY5B/ref=sr_1_4?crid=3LJ1KCIU5COP4&keywords=noise+smart+watches+for+men&qid=1642830685&sprefix=noise%2Caps%2C247&sr=8-4';
				</script>";
		}
		}
	}
	if(isset($_POST['FPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['FPrice']==2299)
		{
			echo"<script>
				window.location.href='https://www.flipkart.com/noise-colorfit-pro-2-smartwatch/p/itm65c16ba329bb4?pid=SMWFWFHYUFWPJKAS&lid=LSTSMWFWFHYUFWPJKASOUOUP9&marketplace=FLIPKART&q=noise+smartwatch&store=ajy%2Fbuh&srno=s_1_7&otracker=AS_QueryStore_OrganicAutoSuggest_1_5_na_na_na&otracker1=AS_QueryStore_OrganicAutoSuggest_1_5_na_na_na&fm=SEARCH&iid=1029b794-bc8f-4433-8149-36e488b347c4.SMWFWFHYUFWPJKAS.SEARCH&ppt=hp&ppn=homepage&ssid=9d5qiqeyds0000001642831049064&qH=7906140f3f4b18d1';
				</script>";
		}
		}
	}
	if(isset($_POST['RDPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['RDPrice']==2799)
			{
				echo"<script>
				window.location.href='https://www.reliancedigital.in/noise-colorfit-pro-2-smart-watch-teal-green/p/491900988';
			</script>";
			}
		}
	}
	if(isset($_POST['APrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['APrice']==252)
		{
			echo"<script>
				window.location.href='https://www.amazon.in/Dabur-100-Pure-Honey-Squeezy/dp/B073YSQ927/ref=sr_1_5?crid=23HZ8POZ23QM0&keywords=honey&qid=1642830150&sprefix=honey%2Caps%2C286&sr=8-5&th=1';
				</script>";
		}
		}
	}
	if(isset($_POST['FPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['FPrice']==252)
		{
			echo"<script>
				window.location.href='https://www.flipkart.com/dabur-honey-squeezy/p/itmeu6mgvfaedn4q?pid=HNYEU6MGSMBZ45Z8&lid=LSTHNYEU6MGSMBZ45Z83XHN8S&marketplace=FLIPKART&q=honey&store=eat%2Flnz&srno=s_1_1&otracker=search&otracker1=search&fm=SEARCH&iid=en_DYI%2ByG7FPmo6ZIa5tM%2FXYh3my87BmHBwmTAaTD0RV2I8hC5F%2FsQacAgYa5vo%2B4Un5ZJzBbLPAJWaNpdA92ETpA%3D%3D&ppt=sp&ppn=sp&ssid=e5cp8yvveo0000001642830163715&qH=b60eb83bf533eecf';
				</script>";
		}
		}
	}
	if(isset($_POST['BBPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['BBPrice']==297)
			{
				echo"<script>
				window.location.href='https://www.bigbasket.com/pd/240125/dabur-100-pure-honey-400-g-squeezy-pack/';
				</script>";
			}
		}
	}
	if(isset($_POST['APrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['APrice']==371)
		{
			echo"<script>
				window.location.href='https://www.amazon.in/Sugarlite-50-Less-Calories-Sugar/dp/B08Z45WBL6/ref=sr_1_3_sspa?crid=2B8U4PWB8T1TF&keywords=sugar&qid=1642828840&sprefix=sugar%2Caps%2C256&sr=8-3-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUEzTzNGOUxMTTlBRkdNJmVuY3J5cHRlZElkPUEwNjUyNzc2MlFPR0QzQU1QMjRRSiZlbmNyeXB0ZWRBZElkPUEwNjA4NTAzOU1TOFdHV0NUSUNGJndpZGdldE5hbWU9c3BfYXRmJmFjdGlvbj1jbGlja1JlZGlyZWN0JmRvTm90TG9nQ2xpY2s9dHJ1ZQ==';
				</script>";
		}
		}
	}
	if(isset($_POST['FPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['FPrice']==371)
		{
			echo"<script>
				window.location.href='https://www.flipkart.com/sugarlite-sugar/p/itmc9bcd3172b943?pid=SUGGF8JYRWHKKG4X&lid=LSTSUGGF8JYRWHKKG4X5VZFCF&marketplace=FLIPKART&q=sugar&store=eat%2Fmzy&srno=s_1_10&otracker=search&otracker1=search&fm=SEARCH&iid=8167e609-20b2-4be5-a898-27bee59fdc10.SUGGF8JYRWHKKG4X.SEARCH&ppt=sp&ppn=sp&qH=ada15bd1a5ddf0b7';
				</script>";
		}
		}
	}
	if(isset($_POST['APrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['APrice']==150)
		{
			echo"<script>
				window.location.href='https://www.amazon.in/Fogg-Fragrant-Spray-Women-Paradise/dp/B00YEK0E5S/ref=sr_1_5?crid=21LT3ANUK7UWH&keywords=perfume+for+women+fogg&qid=1642831692&sprefix=perfume+for+women+fogg%2Caps%2C249&sr=8-5';
				</script>";
		}
		}
	}
	if(isset($_POST['FPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['FPrice']==138)
		{
			echo"<script>
				window.location.href='https://www.flipkart.com/fogg-paradise-deodorant-spray-women/p/itmf3v9qxhbkjmmj?pid=DEOED3TZ44YVXQZZ&lid=LSTDEOED3TZ44YVXQZZP3IMHM&marketplace=GROCERY&q=perfume+for+women+fogg&store=g9b%2F0yh%2Fvp1%2F0kb&spotlightTagId=BestsellerId_g9b%2F0yh%2Fvp1%2F0kb&srno=s_1_2&otracker=search&otracker1=search&fm=SEARCH&iid=9117e058-b13d-417d-b825-b557f345508e.DEOED3TZ44YVXQZZ.SEARCH&ppt=sp&ppn=sp&ssid=z2n9nrlqyo0000001642831689841&qH=4b11e57a76eb2f4e';
				</script>";
		}
		}
	}
	if(isset($_POST['BBPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['BBPrice']==175)
			{
				echo"<script>
				window.location.href='https://www.bigbasket.com/pd/40001567/fogg-fragrance-body-spray-delicious-150-ml/?nc=as&q=fogg%20fra';
				</script>";
			}
		}
	}
	if(isset($_POST['APrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['APrice']==430)
		{
			echo"<script>
				window.location.href='https://www.amazon.in/Comfort-After-Morning-Fabric-Conditioner/dp/B07F8H9NYY/ref=sr_1_3_sspa?crid=2O5HKSES1DN5H&keywords=comfort+after+wash+morning+fresh+fabric+conditioner%2C+2l&qid=1642831971&smid=AT95IG9ONZD7S&sprefix=comfort+after+wash+morning+fresh+fabric+conditioner%2C+2+l%2Caps%2C310&sr=8-3-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUEzQzhXUUlPSDMxSVAxJmVuY3J5cHRlZElkPUEwNjA1ODA0MTNBT0swM0ZUS1RQVSZlbmNyeXB0ZWRBZElkPUEwOTc0NDM0Skk2WkpZQTlQN0w2JndpZGdldE5hbWU9c3BfYXRmJmFjdGlvbj1jbGlja1JlZGlyZWN0JmRvTm90TG9nQ2xpY2s9dHJ1ZQ==';
				</script>";
		}
		}
	}
	if(isset($_POST['FPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['FPrice']==382)
		{
			echo"<script>
				window.location.href='https://www.flipkart.com/comfort-after-wash-morning-fresh-fabric-conditioner/p/itmf9jz4xzjyyer4?pid=FSNF6Y4Y9GYGCPYG&lid=LSTFSNF6Y4Y9GYGCPYG3QLPGM&marketplace=GROCERY&q=Comfort+After+Wash+Morning+Fresh+Fabric+Conditioner%2C+2+L&store=rja%2Fplv%2Fyav&srno=s_1_1&otracker=search&otracker1=search&fm=SEARCH&iid=23250238-4d01-437f-be3e-7c6a7ee1a698.FSNF6Y4Y9GYGCPYG.SEARCH&ppt=sp&ppn=sp&ssid=ds5jyyads00000001642831991177&qH=a5d765f6b4c3c618';
				</script>";
		}
		}
	}
	if(isset($_POST['BBPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['BBPrice']==451)
			{
				echo"<script>
				window.location.href='https://www.bigbasket.com/pd/40130608/comfort-after-wash-morning-fresh-fabric-conditioner-2-l/?nc=cl-prod-list&t_pg=&t_p=&t_s=cl-prod-list&t_pos=1&t_ch=desktop';
				</script>";
			}
		}
	}
	if(isset($_POST['APrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['APrice']==133)
		{
			echo"<script>
				window.location.href='https://www.amazon.in/Tide-Ultra-Detergent-Washing-Powder/dp/B07RK4NNM3/ref=sr_1_18_0o_mr_mr_mod_primary_alm?almBrandId=More&crid=2F2WW8YAWHZ5H&fpw=alm&keywords=tide+surf&qid=1642831928&sbo=m6DjfpMzMLDmL8pSMKX8hw%3D%3D&sprefix=tide+surf%2Caps%2C286&sr=8-18';
				</script>";
		}
		}
	}
	if(isset($_POST['FPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['FPrice']==130)
		{
			echo"<script>
				window.location.href='https://www.flipkart.com/tide-ultra-3-1-clean-detergent-powder-kg/p/itmadf996d9737d9?pid=LDTFG9TBZ3ZXUEPP&lid=LSTLDTFG9TBZ3ZXUEPP8IVKDA&marketplace=GROCERY&q=tide+surf&store=search.flipkart.com&srno=s_1_28&otracker=search&otracker1=search&fm=SEARCH&iid=b97e879a-170e-4e12-b872-6cfa74599331.LDTFG9TBZ3ZXUEPP.SEARCH&ppt=sp&ppn=sp&ssid=ot1aowgk3k0000001642831924548&qH=1c8ad2635858c552';
				</script>";
		}
		}
	}
	if(isset($_POST['APrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['APrice']==280)
		{
			echo"<script>
				window.location.href='https://www.amazon.in/Bru-Instant-Coffee-200g/dp/B00649B4EM/ref=sr_1_5?crid=3FRRC6YHT469S&keywords=bru+instant+coffee%2C+200g+pouch&qid=1642832602&sprefix=bru+instant+coffee%2C+200+g+pouch%2Caps%2C381&sr=8-5';
				</script>";
		}
		}
	}
	if(isset($_POST['FPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['FPrice']==369)
		{
			echo"<script>
				window.location.href='https://www.flipkart.com/bru-200g-instant-coffee/p/itm6d75b18a9622e?pid=CFEGAFFUZGTRJ3H3&lid=LSTCFEGAFFUZGTRJ3H3QHMB3V&marketplace=FLIPKART&q=Bru+Instant+Coffee%2C+200+g+Pouch&store=eat%2Fdui&srno=s_1_5&otracker=search&otracker1=search&fm=SEARCH&iid=66eb3cd3-6a52-48ea-bd91-d82e4f5ba12d.CFEGAFFUZGTRJ3H3.SEARCH&ppt=sp&ppn=sp&ssid=4l4cly8bls0000001642832646084&qH=c2434dfad5a28692';
				</script>";
		}
		}
	}
	if(isset($_POST['BBPrice']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($_POST['BBPrice']==269)
			{
				echo"<script>
				window.location.href='https://www.bigbasket.com/pd/266579/bru-instant-coffee-200-g-pouch/?nc=sis-prod-list&t_pg=siscategory&t_p=sis-template-1&t_s=sis-prod-list&t_pos=2&t_ch=desktop';
				</script>";
			}
		}
	}
	
}

?>