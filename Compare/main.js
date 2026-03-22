for (var i = 1; i < product.length; i++) {
    document.getElementById("select1").innerHTML += `
    <option value="${i}">${product[i].title}</option>
    `;
    document.getElementById("select2").innerHTML += `
    <option value="${i}">${product[i].title}</option>
    `;
}

function item1(a) {
    var select2 = document.getElementById("select2").value;
    if (a != select2) {
        document.getElementById("img1").src = product[a].image
        document.getElementById("price1").innerHTML = "RS" +'&nbsp'+  product[a].price + '&nbsp'+"lakhs"
        document.getElementById("desc1").innerHTML = product[a].description
        document.getElementById("brand1").innerHTML = product[a].brand
        document.getElementById("fuel1").innerHTML = product[a].fuel
        document.getElementById("fcapacity1").innerHTML = product[a].capacity
        document.getElementById("btype1").innerHTML = product[a].bodytype
        document.getElementById("xpower1").innerHTML = product[a].xpower
        document.getElementById("cylinders1").innerHTML = product[a].cylinders
        document.getElementById("seating1").innerHTML = product[a].seating
        document.getElementById("mileage1").innerHTML = product[a].mileage
        document.getElementById("torque1").innerHTML = product[a].torque
        document.getElementById("engin1").innerHTML = product[a].engin



    } else {
        document.getElementById("select1").selectedIndex = 0;
        document.getElementById("img1").src = product[0].image
        document.getElementById("price1").innerHTML = ""
        document.getElementById("desc1").innerHTML = ""
        document.getElementById("brand1").innerHTML = ""
        document.getElementById("fuel1").innerHTML = ""
        document.getElementById("fcapacity1").innerHTML = ""
        document.getElementById("btype1").innerHTML = ""
        document.getElementById("xpower1").innerHTML = ""
        document.getElementById("cylinders1").innerHTML = ""
        document.getElementById("seating1").innerHTML = ""
        document.getElementById("mileage1").innerHTML = ""
        document.getElementById("torque1").innerHTML = ""
        document.getElementById("engin1").innerHTML = ""
        
        

    }
}

function item2(a) {
    var select1 = document.getElementById("select1").value;
    if (a != select1) {
        document.getElementById("img2").src = product[a].image
        document.getElementById("price2").innerHTML = "RS " + product[a].price +'&nbsp'+"lakhs"
        document.getElementById("desc2").innerHTML = product[a].description
        document.getElementById("brand2").innerHTML = product[a].brand
        document.getElementById("fuel2").innerHTML = product[a].fuel
        document.getElementById("fcapacity2").innerHTML = product[a].capacity
        document.getElementById("btype2").innerHTML = product[a].bodytype
        document.getElementById("xpower2").innerHTML = product[a].xpower
        document.getElementById("cylinders2").innerHTML = product[a].cylinders
        document.getElementById("seating2").innerHTML = product[a].seating
        document.getElementById("mileage2").innerHTML = product[a].mileage
        document.getElementById("torque2").innerHTML = product[a].torque
        document.getElementById("engin2").innerHTML = product[a].engin
    } else {
        document.getElementById("select2").selectedIndex = 0;
        document.getElementById("img2").src = product[0].image
        document.getElementById("price2").innerHTML = ""
        document.getElementById("desc2").innerHTML = ''
        document.getElementById("brand2").innerHTML = ""
        document.getElementById("fuel2").innerHTML = ""
        document.getElementById("fcapacity2").innerHTML = ""
        document.getElementById("btype2").innerHTML = ""
        document.getElementById("xpower2").innerHTML = ""
        document.getElementById("cylinders2").innerHTML = ""
        document.getElementById("seating2").innerHTML = ""
        document.getElementById("mileage2").innerHTML = ""
        document.getElementById("torque2").innerHTML = ""
        document.getElementById("engin2").innerHTML = ""

    }
}