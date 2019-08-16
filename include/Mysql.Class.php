 <?php
 /*
* filename��mysql���ݿ�������
* Author�����ղ���
* qq��2366439636
* email�� smiling998@163.com
* ΢Ц���ɲ�������һ���ˡ����Կ����ҵĳ�ǿ�����Ա����ҵĴ�����
*/
class mysql {
    private $db_host; //���ݿ�����
    private $db_user; //���ݿ��û���
    private $db_pwd; //���ݿ��û�������
    private $db_database; //���ݿ���
    private $conn; //���ݿ����ӱ�ʶ;
    private $result; //ִ��query����Ľ����Դ��ʶ
    private $sql; //sqlִ�����
    private $row; //���ص���Ŀ��
    private $coding; //���ݿ���룬GBK,UTF8,gb2312
    private $bulletin = true; //�Ƿ��������¼
    private $show_error = true; //���Խ׶Σ���ʾ���д���,���а�ȫ����,Ĭ�Ϲر�
    private $is_error = false; //���ִ����Ƿ�������ֹ,Ĭ��true,���鲻���ã���Ϊ��������ʱ�û�ʲôҲ�������Ǻܿ��յ�

    //���캯��
    public function __construct($db_host, $db_user, $db_pwd, $db_database, $conn, $coding) {
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_pwd = $db_pwd;
        $this->db_database = $db_database;
        $this->conn = $conn;
        $this->coding = $coding;
        $this->connect();
    }

    //���ݿ�����
    public function connect() {
        if ($this->conn == "pconn") {
            //��������
            $this->conn = mysql_pconnect($this->db_host, $this->db_user, $this->db_pwd);
        } else {
            //��ʹ����
            $this->conn = mysql_connect($this->db_host, $this->db_user, $this->db_pwd);
        }

        if (!mysql_select_db($this->db_database, $this->conn)) {
            if ($this->show_error) {
                $this->show_error("���ݿⲻ���ã�", $this->db_database);
            }
        }
        mysql_query("SET NAMES $this->coding");
    }
     
    //���ݿ�ִ����䣬��ִ�в�ѯ����޸�ɾ�����κ�sql���
    public function query($sql) {
        if ($sql == "") {
            $this->show_error("SQL������", "SQL��ѯ���Ϊ��");
        }
        $this->sql = $sql;

        $result = mysql_query($this->sql, $this->conn);

        if (!$result) {
            //������ʹ�ã�sql������ʱ���Զ���ӡ����
            if ($this->show_error) {
                $this->show_error("����SQL��䣺", $this->sql);
            }
        } else {
            $this->result = $result;
        }
        return $this->result;
    }

    //�����Ի�����ʾ
	public function show_msg($url,$show="�����ѳɹ�"){
		$msg='<script>alert("'.$show.'");window.location="'.$url.'"</script>;
	���������޷���ת��<a href="'.$url.'">�����˴�</a>';
	echo $msg;
	exit();
	}
	
	//��������µ����ݿ�
	public function create_database($database_name) {
        $database = $database_name;
        $sqlDatabase = 'create database ' . $database;
        $this->query($sqlDatabase);
    }

    
    //��ϵͳ���ݿ����û����ݿ�ֿ�����ֱ�۵���ʾ��
    public function show_databases() {
        $this->query("show databases");
        echo "�������ݿ⣺" . $amount = $this->db_num_rows($rs);
        echo "<br />";
        $i = 1;
        while ($row = $this->fetch_array($rs)) {
            echo "$i $row[Database]";
            echo "<br />";
            $i++;
        }
    }

    //��������ʽ�����������������ݿ���
    public function databases() {
        $rsPtr = mysql_list_dbs($this->conn);
        $i = 0;
        $cnt = mysql_num_rows($rsPtr);
        while ($i < $cnt) {
            $rs[] = mysql_db_name($rsPtr, $i);
            $i++;
        }
        return $rs;
    }

    // ��ѯ���ݿ������еı�
    public function show_tables($database_name) {
        $this->query("show tables");
        echo "�������ݿ⣺" . $amount = $this->db_num_rows($rs);
        echo "<br />";
        $i = 1;
        while ($row = $this->fetch_array($rs)) {
            $columnName = "Tables_in_" . $database_name;
            echo "$i $row[$columnName]";
            echo "<br />";
            $i++;
        }
    }

    //ȡ�ý������
    public function mysql_result_li() {
        return mysql_result($str);
    }

    /*ȡ�ü�¼��,��ȡ����-�����͹���,ʹ��$row['content'] */
    public function fetch_array() {
        return mysql_fetch_array($this->result);
    }

    //��ȡ��������,ʹ��$row['�ֶ���']
    public function fetch_assoc() {
        return mysql_fetch_assoc($this->result);
    }

    //��ȡ������������,ʹ��$row[0],$row[1],$row[2]
    public function fetch_row() {
        return mysql_fetch_row($this->result);
    }

    //��ȡ��������,ʹ��$row->content
    public function fetch_Object() {
        return mysql_fetch_object($this->result);
    }

    //�򻯲�ѯselect
    public function findall($table) {
        $this->query("SELECT * FROM $table");
    }

    //�򻯲�ѯselect
    public function select($table, $columnName = "*", $condition = '',$limit,$debug = '',$substr,$date) {
        $condition = $condition ? ' Where newstypeid=' . $condition : NULL;
        if ($debug) {
            $sql = "SELECT $columnName FROM $table $condition order by newsid desc limit 0,".$limit;
			$rs = $this->query($sql);
			while($rows=mysql_fetch_assoc($rs))
			{
			echo "<tr class='line'>
              <td width='20' height='25' align='center'>
                <img src='image/xxcms_icon.jpg' width='4' height='4'/></td>
              <td align='left'>
			  <a href='news/".$rows["newspath"]."' title=".$rows["newstitle"]." target='_blank'>".substr($rows["newstitle"],0,$substr)."</a></td>";
			  if($date){
              echo "<td width='91' align='center'>".substr($rows["newstime"],0,10)."</td></tr>";
				}
			}
        } else {
            $this->query("SELECT $columnName FROM $table $condition");
        }
    }
    //��վ����
    public function ly_system($table,$sort){
            $sql = "SELECT * FROM $table";
			$rs = $this->query($sql);
			while($rows=mysql_fetch_assoc($rs))
			{
			
			switch($sort){
			case 1:
				echo $rows["name"];  //��վ����
				break;
			case 2:
				echo $rows["title"];  //��վ����
				break;
			case 3:
				echo $rows["keywords"];  //�ؼ���
				break;
			case 4:
				echo $rows["smalltext"];  //��վ����
				break;	
			case 5:
				echo $rows["url"];  //��վURL
				break;	
			case 6:
				return $rows["page"];  //ҳ��
				break;
			case 7:
				return $rows["is_audit"];  //�������
				break;
			case 8:
				return $rows["is_html"];  //����html
				break;
			default :
				echo $rows["copyright"];  //��Ȩ��Ϣ
		}
			}
    }
    //��ɾ��del
    public function delete($table, $condition, $url = '') {
        if ($this->query("DELETE FROM $table WHERE $condition")) {

            if (!empty ($url))
                $this->show_msg($url, 'ɾ���ɹ���');
        }
    }

    //�򻯲���insert
    public function insert($table, $columnName, $value, $url = '') {
        if ($this->query("INSERT INTO $table ($columnName) VALUES ($value)")) {
            if (!empty ($url))
                $this->show_msg($url, '��ӳɹ���');
        }
    }

    //���޸�update
    public function update($table, $mod_content, $condition, $url = '') {
        
        if ($this->query("UPDATE $table SET $mod_content WHERE $condition")) {
            if (!empty ($url))
                $this->show_msg($url);
        }
    }

    //ȡ����һ�� INSERT ���������� ID
    public function insert_id() {
        return mysql_insert_id();
    }

    //ָ��ȷ����һ�����ݼ�¼
    public function db_data_seek($id) {
        if ($id > 0) {
            $id = $id -1;
        }
        if (!@ mysql_data_seek($this->result, $id)) {
            $this->show_error("SQL�������", "ָ��������Ϊ��");
        }
        return $this->result;
    }

    // ����select��ѯ���������������
    public function db_num_rows() {
        if ($this->result == null) {
            if ($this->show_error) {
                $this->show_error("SQL������", "��ʱΪ�գ�û���κ����ݣ�");
            }
        } else {
            return mysql_num_rows($this->result);
        }
    }

    // ����insert,update,deleteִ�н��ȡ��Ӱ������
    public function db_affected_rows() {
        return mysql_affected_rows();
    }

    //�ͷŽ����
    public function free() {
        @ mysql_free_result($this->result);
    }

    //���ݿ�ѡ��
    public function select_db($db_database) {
        return mysql_select_db($db_database);
    }

    //��ѯ�ֶ�����
    public function num_fields($table_name) {
        //return mysql_num_fields($this->result);
        $this->query("select * from $table_name");
        echo "<br />";
        echo "�ֶ�����" . $total = mysql_num_fields($this->result);
        echo "<pre>";
        for ($i = 0; $i < $total; $i++) {
            print_r(mysql_fetch_field($this->result, $i));
        }
        echo "</pre>";
        echo "<br />";
    }

    //ȡ�� MySQL ��������Ϣ
    public function mysql_server($num = '') {
        switch ($num) {
            case 1 :
                return mysql_get_server_info(); //MySQL ��������Ϣ
                break;

            case 2 :
                return mysql_get_host_info(); //ȡ�� MySQL ������Ϣ
                break;

            case 3 :
                return mysql_get_client_info(); //ȡ�� MySQL �ͻ�����Ϣ
                break;

            case 4 :
                return mysql_get_proto_info(); //ȡ�� MySQL Э����Ϣ
                break;

            default :
                return mysql_get_client_info(); //Ĭ��ȡ��mysql�汾��Ϣ
        }
    }

    //�����������Զ��ر����ݿ�,�������ջ���
    public function __destruct() {
        if (!empty ($this->result)) {
            $this->free();
        }
        mysql_close($this->conn);
    } //function __destruct();

}?>