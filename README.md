

### 度秘开放api文档
[度秘开放api文档](doc/OPENAPI_README.md)

### 度秘开放api json schema详细定义
基于[http://json-schema.org/](http://json-schema.org/)的标准，提供了详细的schema验证
[json schema详细定义](schema/README.md)



|类型 | 操作 |	order|	value1|	value2|	value3|	value4|	groupData|
| ---- | ---- | ---- | ---- | ---- | ---- | ----| ---- |
|开关类型设备(灯，开关，插座,电视，机顶盒)| 打开|ON||||||
|开关类型设备(灯，开关，插座,电视，机顶盒)| 打开|ON||||||
|开关类型设备(灯，开关，插座,电视，机顶盒)| 打开|ON||||||
| | 关闭  |OFF||||||
|开关类型设备(灯，开关，插座,电视，机顶盒)| 打开|ON||||||
| | 关闭  |OFF|||||
|调光灯| 打开|ON||||||
| | 关闭  |OFF	|	
| |移动	|MOVE_TO_LEVEL||		亮度值，最高值255|
多功能控制盒| 打开|ON             |
| | 关闭  |OFF|
有开关和一个进度属性的设备(窗帘，开窗器，温控器等)| 打开|ON       
| | 关闭  |OFF			
| |移动	|MOVE_TO_LEVEL|	移动比例，例如10, 表示移动10%|
| |停止移动|	STOP
警报设备 |关闭警报|	MUTE
空调设备 |打开|	OPEN					
| |关闭|	CLOSE					
| |调整温度|	MOVE_TO_LEVEL|	温度值，例如26，表示调置为26度			
| |切换到指定的工作模式|	SET	|AIRCONDITION_MODE_TYPE |工作模式值 例如，AIRCONDITION_MODE_COOL			
| |切换到指定的风速模式|	SET	|AIRCONDITION_WIND_RATE_TYPE |风速模式，例如，AIRCONDITION_WIND_RATE_MIDDLE			
| |切换到指定的扫风模式	|SET|	AIRCONDITION_WIND_RATE_TYPE | 扫风模式，例如，AIRCONDITION_WIND_DIRECTION_LEFT_RIGHT			
| |直接切换到下一个工作模式|	NEXT|	AIRCONDITION_MODE_TYPE			
| |直接切换到下一个风速模式|	NEXT|	AIRCONDITION_WIND_RATE_TYPE		
| |直接切换到下一个扫风模式|	NEXT|	AIRCONDITION_WIND_RATE_TYPE

### 设备状态

类型  |	value1|	value2|	value3|	value4|	groupData
----|----|----|----|----|----|
开关类型设备(灯，开关，插座,电视，机顶盒)|0: 表示打开 <br>-1:表示关闭|
调光灯|0: 表示打开 <br>-1:表示关闭|填写亮度值，最高值255|
多功能控制盒|当前移动位置(只有0和100两个进度值)			<br>0：表示关闭<br>100：表示打开|
有开关和一个进度属性的设备(窗帘，开窗器等)|当前移动位置(0~100) 0:关闭，100:打开|				
门磁、窗磁 | 填写0表示关闭，不需要报警<br>填写1表示打开，需要报警	||	填写0表示低电量,填写1表示正常电量 |	填写电量值	
烟感 | 填写0表示不报警,填写1表示报警	|	填写0表示低电量,填写1表示正常电量 |	填写电量值	
人体红外|填写0表示没有报警,填写1表示检测到入侵，需要报警	|填写1表示入侵的人一直存在,填写0表示没有检测到入侵持续存在|填写0表示低电量,填写1表示正常电量|	填写电量值	
温湿度传感器 |填写温度值|	填写湿度值	| |填写电量值（-1表示此设备不是电池供电的设备）	
照度|填写传感器上报的测量值MeasuredValue	|||		填写电量值	
门锁 | 填写on/off属性值 <br>0:表示状态为<br>，1:表示状态为关	|||		电量值	
空调设备 | 填写0表示打开 <br>填写-1表示关闭 |||| json 字符串，键值分别为温度，空调模式，风速，风向<br>JSONObject jobj = new JSONObject() <br>//空调温度 <br>jobj.put(JdSmartDeviceOrder.TEMPERATURE, "26") <br>//空调模式 <br>jobj.put(JdSmartDeviceOrder.AIRCONDITION_MODE_TYPE,JdSmartDeviceOrder.AIRCONDITION_MODE_COOL)<br>//空调风速 <br>jobj.put(JdSmartDeviceOrder.AIRCONDITION_WIND_RATE_TYPE,JdSmartDeviceOrder.AIRCONDITION_WIND_RATE_AUTO) <br>//空调风向 <br>jobj.put(JdSmartDeviceOrder.AIRCONDITION_WIND_DIRECTION_TYPE,JdSmartDeviceOrder.AIRCONDITION_WIND_DIRECTION__UP_DOWN)
