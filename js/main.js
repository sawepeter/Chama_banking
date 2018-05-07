$(document).ready(function(){
	cat();
	type();
	product();
	dashboard();
	function dashboard(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {dashboard:1},
			success : function(data){
				$("#get_dash").html(data);
			}
		})
	}
	
	cancel();
	function cancel(){
		$.ajax({
			url	: "cancel.php",
			method	: "POST",
			data	: {Cancel:1},
			success	: function(event){
				$("#cancel_result").html(data);
			}
			
		})
	}
	//get pending orders
	$("body").delegate("#pending","click",function(event){
		event.preventDefault();
		
		
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {get_pending_orders:1},
			success : function(data){
				$("#get_dash_element").html(data);
			}
		})
		
	})
	//get complete orders
	$("body").delegate("#complete","click",function(event){
		event.preventDefault();
		
		
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {get_complete_orders:1},
			success : function(data){
				$("#get_dash_element").html(data);
			}
		})
		
	})
	//get cancelled orders
	$("body").delegate("#cancelled","click",function(event){
		event.preventDefault();
			
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {get_cancelled_orders:1},
			success : function(data){
				$("#get_dash_element").html(data);
			}
		})
		
	})
	//cancel order
	$("body").delegate("#canelorder","click",function(event){
		event.preventDefault();
		
		$.ajax({
			url : "cancel.php",
			method : "POST",
			data : {cancel:1},
			success : function(data){
				alert(data);
				die();
				$("#cancel_msg").html(data);
				
			}
		})
		
	})
	//get selected profile element
	
	$("body").delegate(".dash","click",function(event){
		event.preventDefault();
		var cid=$(this).attr('cid');
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {get_prof_element:1,dash_id:cid},
			success : function(data){
				$("#get_dash_element").html(data);
			}
		})
		
	})
	//logout on the checkout page
	$("body").delegate("#log_out","click",function(event){
		event.preventDefault();
		
		
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {logout:1},
			success : function(data){
				window.location.href='checkout.php';
			}
		})
		
	})
	
	
	function cat(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {category:1},
			success : function(data){
				$("#get_category").html(data);
			}
		})
	}
	function type(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {type:1},
			success : function(data){
				$("#get_type").html(data);
			}
		})
	}
	function product(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {getProduct:1},
			success : function(data){
				$("#get_product").html(data);
			}
		})
	}
	$("body").delegate(".category","click",function(event){
		event.preventDefault();
		var cid=$(this).attr('cid');
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {get_selected_Category:1,cat_id:cid},
			success : function(data){
				$("#get_product").html(data);
			}
		})
		
	})
	$("body").delegate(".selectType","click",function(event){
		event.preventDefault();
		var tid=$(this).attr('tid');
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {selectType:1,type_id:tid},
			success : function(data){
				$("#get_product").html(data);
			}
		})
		
	})
	
	$("#search").keyup(function(){
		var keyword=$("#search").val();
		if(keyword !=""){
			$.ajax({
			url : "action.php",
			method : "POST",
			data : {search:1,keyword:keyword},
			success : function(data){
				$("#get_product").html(data);
			}
		})
		}else{
			$.ajax({
			url : "action.php",
			method : "POST",
			data : {reset:1},
			success : function(data){
				//$("#get_product").html(data);
				window.location.href='index_home.php';
			}
		})
		}
	})
	/*
	$(".gender").change(function(event){
		event.preventDefault();
		var gd=$(".gender").val();
		alert(gd);
		//window.location.href='index.php';
		
	})
	*/
	$("#signup_button").click(function(event){
		event.preventDefault();
		$.ajax({
			url : "register.php",
			method : "POST",
			data : $("form").serialize(),
			success : function(data){
				
				$("#signup_msg").html(data);
				
			}
		})
	})
	/*
	$("#post").click(function(event){
		
		event.preventDefault();
		$.ajax({
			url : "food_val.php",
			method : "POST",
			data : $("form").serialize(),
			success : function(data){
				
				$("#food_msg").html(data);
				
			}
		})
	})
	*/
/*
	$("#cook_btn").click(function(event){
		event.preventDefault();
		
		$.ajax({
			url	: "cook_val.php",
			method	: "POST",
			data	: $("form").serialize(),
			success	: function(data){
				$("#signup_msg").html(data);
				window.location.href="profile.php";
			}
		})
	})
	*/
	$("#cook_btn").click(function(event){
		event.preventDefault();
		$.ajax({
			url	: "cook_val.php",
			method	: "POST",
			data	: $("form").serialize(),
			success	: function(data){
				
				if(data=="true"){
					//$("#cook_msg").html(data);
					window.location.href="profile.php";
				}else{
					//alert(data);
					$("#cook_msg").html(data);
				}			
				
			}
		})
	})
	$("#login").click(function(event){
		event.preventDefault();
		var email=$("#email").val();
		var password =$("#password").val();
		if(email =="" || password == ""){
			alert("please fill all details for you to log in");
		}else{
		$.ajax({
			url : "login.php",
			method : "POST",
			data : {userLogin:1,userEmail:email,userPassword:password},
			success : function(data){
			if(data == "true"){	
				
				window.location.href = "client_profile.php";
			}else{
				alert("You are not in our system. check email password combination");
			}
			}
		})
		}
	})
	$("#adm_login").click(function(event){
		event.preventDefault();
		
		var email=$("#email").val();
		var password =$("#password").val();
		if(email =="" || password == ""){
			alert("please fill all details for you to log in");
		}else{
		$.ajax({
			url : "admin_login_val.php",
			method : "POST",
			data : {admLogin:1,admEmail:email,admPassword:password},
			success : function(data){
				
			if(data == "true"){	
				
				window.location.href = "admin_portal.php";
			}else{
				alert("Please we dont recognize you");
			}
			}
		})
		}
	})
	
	$("#cook_login").click(function(event){
		event.preventDefault();
		
		var email=$("#email").val();
		var password =$("#password").val();
		if(email =="" || password == ""){
			alert("please fill all details for you to log in");
		}else{
		$.ajax({
			url	: "cook_login_val.php",
			method	: "POST",
			data : {cookLogin:1,cookEmail:email,cookPassword:password},
			success : function(data){
				
			if(data == "true"){	
				
				window.location.href = "cook_portal.php";
			}else{
				alert("Your account is under review, Please wait for account approval soon");
			}
			}
		})}
	})
	cart_count();
	cart_checkout();
	$("body").delegate("#product","click",function(event){
		event.preventDefault();
		//get the browser
		
		var p_id=$(this).attr('pid');
		$.ajax({
			url : 'action.php',
			method	: 'POST',
			data	: {addToProduct:1,proId:p_id},
			success	: function (data) {
				$("#product_msg").html(data);
				cart_count(); 
				cart_checkout();
			}
		})
	})
	cart_container();
	function cart_container(){
		$.ajax({
			url	:  "action.php",
			method	:"POST",
			data	:{get_cart_product:1},
			success	: function(data){
				$("#cart_product").html(data);
				
			}
		})
		
	};
	checkout();
	function checkout(){
		$.ajax({
			url	:  "action.php",
			method	:"POST",
			data	:{proceedToCheckout:1},
			success	: function(data){
				$("#proceed_checkout").html(data);
				
			}
		})
		
	};
	
	
	function cart_count(){
		$.ajax({
			url	:  "action.php",
			method	:"POST",
			data	:{cart_count:1},
			success	: function(data){
				$(".badge").html(data);
				
			}
		})
	}
	cart_checkout();
	function cart_checkout(){
		
			$.ajax({
			url	: "action.php",
			method	: "POST",
			data	: {cart_checkout:1},
			success	: function(data){
				$("#cart_checkout").html(data);
			}
			
			
		})
	}
	$("body").delegate(".qty","keyup",function(){
		var pid=$(this).attr("pid");
		var qty=$("#qty-"+pid).val();
		var price=$("#price-"+pid).val();
		var total=qty * price;
		$("#total-"+pid).val(total);
		 
	})
	$("body").delegate("#empty","click",function(event){
		event.preventDefault();
		var del=confirm("Delete all records?");
		if(del==1){
		$.ajax({
		
			url : "delete.php",
			method	: "POSt",
			data	: data,
			catche	: false,
			success : function(data){
				
				$("#empty_msg").html(data);
			}
			
		})
		}else{
			die();
		}
	})
	$("body").delegate(".remove","click",function(event){
		event.preventDefault();
		var pid= $(this).attr("remove_id");
		$.ajax({
			url	: "action.php",
			method	:"POST",
			data	: {removeFromCart:1,removeId:pid},
			success	: function(data){
				$("#cart_msg").html(data); 
				cart_checkout();
			}
			
		})
		
		
	})
	//load index
	$("body").delegate("#type","change",function(event){
		event.preventDefault();
		var getval=$("#type").val();
		if(getval=='customer'){
			window.location.href='index_home.php';
		}else if(getval=='cook'){
			window.location.href='cook/cook_login.php';
		}else{
			die();
		}
		
		
	})
	//logged in place order
	$("body").delegate("#place","click",function(event){
		event.preventDefault();
		var order=confirm("You are about to place an order!");
		if(order==1){
		$.ajax({
			url	:"action.php",
			method	:  "POST",
			data	: {placeorder:1},
			success	: function(data){
				$("#placeorder_msg").html(data); 
				
			}
		})
	}else{
		die();
	}
		
	})
	
	//update profile details
	$("body").delegate("#update","click",function(event){
		event.preventDefault();
		var pass=$(document.getElementById("newpass")).val();
		var confirm_pass=$(document.getElementById("pass2")).val();
		
		$.ajax({
			url	:"action.php",
			method	:  "POST",
			data	: {updateprofile:1,password:pass,pass2:confirm_pass},
			success	: function(data){
				$("#profile_msg").html(data); 
				
			}
		})
		
	})
	
	
	//update cart
	$("body").delegate(".update","click",function(event){
		event.preventDefault();
		var pid= $(this).attr("update_id");
		var qty=$("#qty-"+pid).val();
		var price=$("#price-"+pid).val();
		var total=$("#total-"+pid).val();
		$.ajax({
			url	:"action.php",
			method	:  "POST",
			data	: {updateCart:1,updateId:pid,qty:qty,price:price,total:total},
			success	: function(data){
				$("#cart_msg").html(data); 
				cart_checkout();
			}
		})
		
	})
	page();
	function page(){
		$.ajax({
			url	: "action.php",
			method	: "POST",
			data	: {page:1},
			success	:  function(data){
				
				$("#pageno").html(data);
			}
		})
	}
	$("body").delegate("#page","click",function(){
		var pn=$(this).attr("page");
		 $.ajax({
			url	: "action.php",
			method	: "POST",
			data	: {getProduct:1,setPage:1,pageNumber:pn},
			success	:  function(data){
				
				$("#get_product").html(data);
			}
		})
	})
	
	/*
	$("body").delegate("#order","click",function(event){
		event.preventDefault();
		var place = confirm("Confirm you want to Place this Order");
		
		//var address=$(document.getElementById("address")).val();
		if(place==1){
		$.ajax({
			url	: "place_checkout.php",
			method	: "POST",
			data	: $("form").serialize(),
			success : function(data){
				document.write(data);
			}
		})}else{
			die();
		}
		
		
	})
	*/
	
	$("#order").click(function(event){
		event.preventDefault();
		$.ajax({
			url : "place_checkout.php",
			method : "POST",
			data : $("form").serialize(),
			success : function(data){
				$("#checkout_msg").html(data);
				if(data=="true"){
					window.location.href="client_profile.php";
				}else{
					
				}
					
				
				
				
			}
		})
	})
	
	
})
