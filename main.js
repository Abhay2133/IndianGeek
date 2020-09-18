
//alert('0')

function submit()
{
    alert('1')
    let formBtn = se('i', 'form-submit');
    triggerEvent(formBtn, 'click');
   // alert('1');
}


window.onload = function (){
    
    const se = (key, val) => {
        switch (key) {
            
 case 'i': return document.getElementById(val);
    break;
 case 'c': return document.getElementsByClassName(val);
    break;
 case 't': return document.getElementsByTagName(val);
    break;
    
        }
        
        return 0;
    }
   
    
}