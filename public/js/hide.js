// var x = document.getElementById('hide');

// console.log(x);

// x.addEventListener(onClick, (e)=>
// {
//     console.log(e.getAttribute('class'));
// })

    

function hideDiv(e,id)
{
    // var x = document.getElementById('hide');
    // var id = x.getAttribute('class');
    // console.log(id);
    // console.log('fuck you');
    e.preventDefault();
    document.getElementById('single'+id).style.display = 'none';
    // return false;
}                        