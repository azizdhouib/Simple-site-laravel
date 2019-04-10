


function cart(id, img, name, prix) {
    var item = [];
    Array.prototype.replaceContents = function (array2) {

        var newContent = array2.slice(0);

        this.length = 0;

        this.push.apply(this, newContent);
    };
    var testObject = {'img':img, 'id': id, 'name': name, 'prix':prix, 'quantity':1};


        if (localStorage.getItem('item')){
            item.replaceContents(JSON.parse(localStorage.getItem('item')));
            //item.push(this, JSON.parse(localStorage.getItem('item')));
        }

        item.push(testObject);


    localStorage.setItem('item', JSON.stringify(item));

}
function remove(id) {
    var item = [];
    Array.prototype.replaceContents = function (array2) {

        var newContent = array2.slice(0);

        this.length = 0;

        this.push.apply(this, newContent);
    };
    item.replaceContents(JSON.parse(localStorage.getItem('item')));
    for (var i = 0; i < item.length; i++){
        if (item[i]['id'] == id){
            item.splice(i,1);
        }
    }
    localStorage.setItem('item', JSON.stringify(item));
    location.reload();

}

