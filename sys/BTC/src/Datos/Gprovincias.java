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
@XmlRootElement(name = "provincias") 
public class Gprovincias{
protected ArrayList<provincias> listado;

public Gprovincias(){ 
listado = new ArrayList(); 
}

public Gprovincias( ArrayList<provincias> lista ){
listado = lista; 
}

@XmlElement (name = "provincia") // tag per separar els sales del grup
public void setGrupprovincias ( ArrayList<provincias> lista ){ 
listado = lista; 
}

public ArrayList<provincias> getGrupprovincias (){ 
return listado; 
}

public provincias getprovincias ( int pos ){ 
return listado.get(pos); 
}

public void setprovincias ( provincias pro ){ 
listado.add (pro); 
}

public int numprovincias (){ 
return listado.size(); 
}
    
}