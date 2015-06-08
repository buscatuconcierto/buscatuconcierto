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
@XmlRootElement(name = "ubicaciones") 
public class Gubicacion{
protected ArrayList<ubicacion> listado;

public Gubicacion(){ 
listado = new ArrayList(); 
}

public Gubicacion( ArrayList<ubicacion> lista ){
listado = lista; 
}

@XmlElement (name = "ubicacion") // tag per separar els sales del grup
public void setGrupubicacion ( ArrayList<ubicacion> lista ){ 
listado = lista; 
}

public ArrayList<ubicacion> getGrupubicacion (){ 
return listado; 
}

public ubicacion getubicacion ( int pos ){ 
return listado.get(pos); 
}

public void setubicacion ( ubicacion ubi ){ 
listado.add (ubi); 
}

public int numubicacion (){ 
return listado.size(); 
}
    
}
