<?php if (!defined('THINK_PATH')) exit();?>
		<link rel="stylesheet" href="__PUBLIC__/CSS/student.css" />
		<script type="text/javascript" src="__PUBLIC__/JS/jquery-2.1.0.js" ></script>
		<script type="text/javascript">
			var app="__APP__";	
		</script>
		<script src="__PUBLIC__/JS/score.js"></script>

		<table border="1" style="width: 600px;text-align: center;height: 300px;">
			<tr>
				<td>学号</td>
				<td>姓名</td>
				<td>科目</td>
				<td>分数</td>
				<td>操作</td>
			</tr>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["uname"]); ?></td>
				<td><?php echo ($vo["cno"]); ?></td>
				<td><?php echo ($vo["score"]); ?></td>
				<td>
					<input type="button" value="修改" class="modify" />
					<input type="button" value="删除" class="deleteScore" />
				</td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			

		</table>
		
		<div id="edit">
			<li id="edit_title">
				<span>修改学生成绩</span>
			</li>
			<ul id="e_ul">
				<li>
					<span class="e_title" >学号</span>
					<input type="text" id="e_id" disabled="true" value="" />
				</li>
				<li>
					<span class="e_title" >姓名</span>
					<input type="text" id="e_uname"  placeholder="姓名" disabled="true" />
				</li>
				<li>
					<span class="e_title" >科目</span>
					<input type="text" id="e_course" placeholder="科目" disabled="true" />
				</li>
				<li>
					<span class="e_title" >分数</span>
					<input type="text" id="e_score" placeholder="分数" />
				</li>
				<li>
					<input type="submit" value="修改完成" id="edit_ok" />
					<input type="submit" value="取消" id="cancel" />
				</li>
			</ul>
		</div>