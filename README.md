# deployer
一个使用git的web-hook的简易项目发布工具

### 实现思路
1. 使用git创建一个项目发布专用分支，例如`releases`。
2. 在目标服务器上clone项目仓库到项目的web目录。
3. 项目发布人员在项目发版时合并项目代码到发布专用分支，并向目标服务器发起http的post请求。
4. 目标服务器接收到post请求之后，根据请求参数执行钩子脚本，完成项目代码的部署。