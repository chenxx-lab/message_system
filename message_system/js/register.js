//点击登录按钮 显示模态框 点击文档中的任意位置隐藏模态框
    var register = document.getElementById("register");
    var mask = document.getElementById("mask");
    var show = document.getElementById("show");
		register.onclick = function (event) {
		var event = event || window.event;
        mask.style.display = "block";
        show.style.display = "block";
        
        if (event.stopPropagation) {//阻止事件的传播，阻止他被分配到其他Document节点
            event.stopPropagation();
        } else {
            event.cancelBubble = true;
        }
    };
		document.onclick = function (event) {
        var event = event || window.event;
        var target = event.target || event.srcElement;
        if (target.id !== "show") {
            //获取事件目标 如果不是show才能消失
            mask.style.display = "none";
            show.style.display = "none";
        }
    };
