<?php
class Update extends CI_Model {
     function get_all_notes()
     {
         return $this->db->query("SELECT * FROM notes")->result_array();
     }
      function add_note($note)
     {
         $query = $this->db->query("INSERT INTO notes (title, description, created_at) VALUES (?, ?, NOW())", 
         array($note['title'],$note['description'])); 
         return $query;
     }
     function delete_note($id)
     {
         $query = $this->db->query("DELETE FROM notes WHERE id = ?", array($id));
         return $query;
     }
     function update_note($title, $desc, $id)
     {
        
         $array['title'] = $title;
         $array['desc'] = $desc;
         $array['id'] = $id;
         
         $query = $this->db->query("UPDATE post.notes SET title=? ,description=? WHERE id = ?", $array);
         return $query;
     }

}

?>