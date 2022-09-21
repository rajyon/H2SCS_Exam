function randomizeItems(items)
{
    var cached = items.slice(0), temp, i = cached.length, rand;
    while(--i)
    {
        rand = Math.floor(i * Math.random());
        temp = cached[rand];
        cached[rand] = cached[i];
        cached[i] = temp;
    }
    return cached;
}
function randomizeList()
{
var list = document.getElementById("myQuestions");
    var nodes = list.children, i = 0;
    nodes = Array.prototype.slice.call(nodes);
    nodes = randomizeItems(nodes);
    while(i < nodes.length)
    {
        list.appendChild(nodes[i]);
        ++i;
    }
list.style.display="block";
}

function validateAnswer(item){
    var x = document.getElementById(item);
    var y = x.value.toLowerCase();

    if(y == 'a' || y == 'b' || y == 'c'){
        // DO NOTHING
    }else{
        x.value = "";
    }
    
}