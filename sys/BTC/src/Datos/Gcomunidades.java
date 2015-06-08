/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Datos;

import java.util.ArrayList;
import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author devweb
 */
    
@XmlRootElement(name = "comunidades") 
public class Gcomunidades{
protected ArrayList<comunidades> listado;

public Gcomunidades(){ 
listado = new ArrayList(); 
}

public Gcomunidades( ArrayList<comunidades> lista ){
listado = lista; 
}

@XmlElement (name = "comunidad") // tag per separar els sales del grup
public void setGrupcomunidades ( ArrayList<comunidades> lista ){ 
listado = lista; 
}

public ArrayList<comunidades> getGrupcomunidades (){ 
return listado; 
}

public comunidades getcomunidades ( int pos ){ 
return listado.get(pos); 
}

public void setcomunidades ( comunidades com ){ 
listado.add (com); 
}

public int numcomunidades (){ 
return listado.size(); 
}
    
}

