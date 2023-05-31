class Requester{
    _url;
    _method;

    constructor(url, method){
        this._url = `/easymoney/routers/${url}Router.php?action=`;
        this._method = method;
    }

    getRequest(func, data=""){
        return new Promise((resolve, reject) =>{
            $.ajax({
                url: this._url + func,
                type: this._method,
                dataType: 'json',
                data: data,
                success: function(data){
                    resolve(data)
                },
                error: function(textStatus){
                    reject(textStatus);
                }
            })
        })

    }
}