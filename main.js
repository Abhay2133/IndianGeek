    
    	console.log('started')
//alert(screen.width)
window.onload = ()=>
{
  ni = document.getElementsByClassName('nav-items')[0];
//  ni.style.display = 'none';
}


function toggleNI()
{
  ni = document.getElementsByClassName('nav-items')[0];
  //alert('It Fired! ')
  if(ni.style.display == 'none')
   {
     ni.style.display = 'flex';
     ni.style.flexDirection = 'column';
     tHamBtn(1)
   }
   else
    { ni.style.display='none';
    tHamBtn(0)
    }
   }
   


const tHamBtn = (cmd) =>
{
  bar = document.getElementsByClassName('bar');
  
  if(cmd)
  {
   // bar[0].style.transformOrigin = '0% 50%';
    bar[0].style.transform = 'translateY(12px) rotate(45deg)';
    bar[1].style.transform = 'translateY(0px) rotate(-405deg)';
   //bar[2].style.transformOrigin='0% 50%'
    bar[2].style.transform = 'translateY(-12px)rotate(-45deg)';
  }
  else
  {
    bar[0].style.transform = 'translateY(0px) rotate(0deg)';
      bar[1].style.transform = 'translateY(0px) rotate(0deg)';
    //  bar[1].style.visibility ='visible';
      bar[2].style.transform = 'translateY(0px) rotate(0deg)';
  }
}
   