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
@XmlRootElement(name = "usuarios") 
public class Gusuarios{
protected ArrayList<usuarios> listado;

public Gusuarios(){ 
listado = new ArrayList(); 
}

public Gusuarios( ArrayList<usuarios> lista ){
listado = lista; 
}

@XmlElement (name = "usuario") // tag per separar els sales del grup
public void setGrupusuarios ( ArrayList<usuarios> lista ){ 
listado = lista; 
}

public ArrayList<usuarios> getGrupusuarios (){ 
return listado; 
}

public usuarios getusuarios ( int pos ){ 
return listado.get(pos); 
}

public void setusuarios ( usuarios usu ){ 
listado.add (usu); 
}

public int numstock (){ 
return listado.size(); 
}
    
}