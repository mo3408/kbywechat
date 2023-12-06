<div class="layui-fluid">
    <div class="layui-card">
       
        <div class="layui-card-body">
            <div class="layui-card-box">
                <form class="layui-form render">
					<div class="layui-form-item">
					  <label class="layui-form-label layui-form-required">名称</label>
					  <div class="layui-input-block">
						<input type="text" name="name" value="{$wxinfo.name}" lay-verify="required" placeholder="请输入小程序小程序名称" autocomplete="off" class="layui-input">
					  </div>
					</div>
                   <div class="layui-form-item">
                     <label class="layui-form-label layui-form-required">AppID</label>
                     <div class="layui-input-block">
                       <input type="text" name="appid"  value="{$wxinfo.appid}" placeholder="请输入微信小程序AppID" autocomplete="off" class="layui-input">
                     </div>
                   </div>
                   <div class="layui-form-item">
                     <label class="layui-form-label layui-form-required">AppSecret</label>
                     <div class="layui-input-block">
                       <input type="text" name="appsecret"  value="{$wxinfo.appsecret}" lay-verify="required" placeholder="请输入小程序AppSecret" autocomplete="off" class="layui-input">
                     </div>
                   </div>
				   <div class="layui-form-item">
				     <label class="layui-form-label layui-form-required">原始ID</label>
				     <div class="layui-input-block">
				       <input type="text" name="origin_id"  value="{$wxinfo.origin_id}" lay-verify="required" placeholder="请输入小程序原始ID" autocomplete="off" class="layui-input">
				     </div>
				   </div>
				    <div class="layui-form-item">
				       <div class="layui-input-block">
				         <button type="submit" class="layui-btn" lay-submit lay-filter="demo1">立即提交</button>
				         <button type="reset" class="layui-btn layui-btn-primary">重置</button>
				       </div>
				     </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
// 提交配置
layui.use(['form'], function(){
  var form = layui.form;
   form.on('submit(demo1)', function(data){
      var fields = data.field; // 获取表单字段值
       layer.load(1); // 显示加载动画
         $.ajax({
            url: '{:url("index")}', 
            type: 'POST',
            data: fields,
            success: function(response){	
             layer.close(1); // 关闭加载动画
			 if(response==1){
				  layer.alert('小程序配置修改成功！'); 
			 }
           },
             error: function(){
                layer.close(1); // 关闭加载动画
                layer.alert('表单提交出错！');
            }
     });
      return false;
    });
})
</script>