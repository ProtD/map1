
function Jsdb(db) {
	this._KEY = '__'
	
	this._db = undefined === db ? {} : db
		
	this.toList = function(db,_ret, _from) {
		if ( undefined === db ) db = this._db
		if ( undefined === _ret ) _ret = []
		if ( undefined === _from ) _from = false
		
		for ( var key in db ) {
			if ( this._KEY === key ) {
				for ( k in db[key] ) {
					if ( !_from || k in _from ) {
						for ( i in db[this._KEY][k] ) {
							_ret.push([k,db[this._KEY][k][i]])
						}
					}
				} 				
			}
			else {
				this.toList(db[key],_ret)
			}
		}
		
		return _ret
	}
	
	this.insert = function(key,data) {
		var keys = key.split(' ')
		for ( var ki in keys ) {
			var k = keys[ki]
			var pt = this._db
			for (var i = 0; i < k.length; i++) {
				ch = k.charAt(i).toLowerCase()
				if ( !(ch in pt) ) {
					pt[ch] = {}			
				}
				pt = pt[ch]
			}
			if ( !(this._KEY in pt) ) {
				pt[this._KEY] = {}
			}
			if ( !(key in pt[this._KEY]) ) {
				pt[this._KEY][key] = []
			}
			
			pt[this._KEY][key].push(data)
		}
	}
	
	this.like = function(key,order) {
		var ret = false
		if ( undefined === order ) order == false
		var keys = key.split(' ')
		for ( var ki in keys ) {
			var k = keys[ki].toLowerCase()
			var pt = this._db
			for (var i = 0; i < k.length; i++) {
				var ch = k.charAt(i)
				if ( !(ch in pt) ) {
					return [];
				}
				pt = pt[ch]
			}
			var ret = this.toList(pt,undefined,ret)
		}
		
		if ( order ) {			
			order = order.split(' ')			
			desc = undefined !== order[1] && order[1].toLowerCase() == 'desc'
			order = order[0]						
			
			ret.sort(function(a,b) {
				return desc ? a[1][order] < b[1][order] : a[1][order] > b[1][order]
			})
		}
		
		return ret;
	}
	
	
}
