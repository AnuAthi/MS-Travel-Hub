<?php 
include "header.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Car Rent | MS Travel Hub</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<script src="https://cdn.tailwindcss.com"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

.brand{
    color:white;
    font-size:22px;
    text-decoration:none;
    font-weight:bold;
}
.menu-btn{
    display:none;
    font-size:22px;
    color:white;
    cursor:pointer;
}
.navigation-items a{
    color:white;
    text-decoration:none;
    margin-left:18px;
}

/* ================= MOBILE NAV ================= */
@media(max-width:768px){
    .menu-btn{display:block;}
    .navigation{
        display:none;
        position:absolute;
        top:65px;
        left:0;
        width:100%;
        background:#0a1d3b;
    }
    .navigation.active{display:block;}
    .navigation-items{
        display:flex;
        flex-direction:column;
        padding:20px;
    }
    .navigation-items a{
        padding:10px 0;
    }
}
</style>
</head>

<body class="bg-gray-100">
<section class="bg-blue-900 text-white py-16 text-center">
    <h1 class="text-4xl font-bold">Find Your Perfect Car Rental</h1>
    <p class="mt-2 text-lg">Compare prices from trusted rental companies</p>
</section>

<section class="bg-white shadow-md mx-auto -mt-10 max-w-6xl p-4 rounded-xl flex flex-wrap gap-3 justify-center relative">

  
    <div class="relative w-60">
        <input
            id="locationInput"
            type="text"
            placeholder="Pick-up location"
            class="border rounded px-3 py-2 w-full focus:ring-2 focus:ring-blue-500"
            autocomplete="off"
        >
        <ul id="locationList"
            class="absolute z-50 bg-white border rounded mt-1 w-full hidden max-h-52 overflow-y-auto shadow-lg">
        </ul>
    </div>

    <input type="date" class="border rounded px-3 py-2">
    <input type="time" class="border rounded px-3 py-2">
    <input type="date" class="border rounded px-3 py-2">
    <input type="time" class="border rounded px-3 py-2">

    <button class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600">
        Search
    </button>
</section>

<section class="max-w-7xl mx-auto p-8">
<h2 class="text-2xl font-bold mb-6">Available Cars</h2>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

<div class="tilt-card bg-white rounded-xl shadow-xl overflow-hidden cursor-pointer transition-transform">
<img src="./images/Toyota_Axio.jpg" class="w-full h-52 object-cover">
<div class="p-5">
<h3 class="text-lg font-semibold">Toyota Axio</h3>
<p class="text-sm text-gray-600">Automatic • 4 Seats • Petrol</p>
<div class="flex justify-between items-center mt-4">
<span class="text-xl font-bold text-green-600">LKR 19,999</span>
<button class="bg-blue-600 text-white px-4 py-2 rounded">Select</button>
</div>
</div>
</div>

<div class="tilt-card bg-white rounded-xl shadow-xl overflow-hidden cursor-pointer transition-transform">
<img src="./images/Steel Silver Metallic (ZVC).jpg" class="w-full h-52 object-cover">
<div class="p-5">
<h3 class="text-lg font-semibold">Suzuki Wagon R</h3>
<p class="text-sm text-gray-600">Automatic • 4 Seats • Hybrid</p>
<div class="flex justify-between items-center mt-4">
<span class="text-xl font-bold text-green-600">LKR 17,500</span>
<button class="bg-blue-600 text-white px-4 py-2 rounded">Select</button>
</div>
</div>
</div>

<div class="tilt-card bg-white rounded-xl shadow-xl overflow-hidden cursor-pointer transition-transform">
<img src="./images/Steel Silver Metallic (ZVC).jpg" class="w-full h-52 object-cover">
<div class="p-5">
<h3 class="text-lg font-semibold">Suzuki Wagon R</h3>
<p class="text-sm text-gray-600">Automatic • 4 Seats • Hybrid</p>
<div class="flex justify-between items-center mt-4">
<span class="text-xl font-bold text-green-600">LKR 17,500</span>
<button class="bg-blue-600 text-white px-4 py-2 rounded">Select</button>
</div>
</div>
</div>

</div>
</section>


<script>
document.querySelector(".menu-btn").onclick=()=>{
document.querySelector(".navigation").classList.toggle("active");
};

const threshold=12;
document.querySelectorAll(".tilt-card").forEach(card=>{
card.onmousemove=e=>{
const r=card.getBoundingClientRect();
const x=(e.clientX-r.left)/r.width-.5;
const y=(e.clientY-r.top)/r.height-.5;
card.style.transform=`perspective(1000px) rotateX(${y*-threshold}deg) rotateY(${x*threshold}deg)`;
};
card.onmouseleave=()=>card.style.transform="perspective(1000px)";
});


const locations=[
"Burj Khalifa",
"The Dubai Mall",
"Palm Jumeirah",
"Dubai Fountain",
"Dubai Marina",
"Dubai Miracle Garden",
"Dubai Frame",
"Desert Safari",
"Al Fahidi Historical Neighbourhood",
"Dubai Aquarium & Underwater Zoo"
];

const input=document.getElementById("locationInput");
const list=document.getElementById("locationList");

input.oninput=()=>{
list.innerHTML="";
const v=input.value.toLowerCase();
if(!v){list.classList.add("hidden");return;}
locations.filter(l=>l.toLowerCase().includes(v)).forEach(l=>{
const li=document.createElement("li");
li.textContent=l;
li.className="px-4 py-2 cursor-pointer hover:bg-blue-100";
li.onclick=()=>{input.value=l;list.classList.add("hidden");};
list.appendChild(li);
});
list.classList.remove("hidden");
};

document.addEventListener("click",e=>{
if(!e.target.closest("#locationInput")) list.classList.add("hidden");
});
</script>
<?php
include "footer.php";
?>
</body>
</html>
