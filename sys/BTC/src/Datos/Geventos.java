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
@XmlRootElement(name = "eventos") 
public class Geventos{
protected ArrayList<eventos> listado;

public Geventos(){ 
listado = new ArrayList(); 
}

public Geventos( ArrayList<eventos> lista ){
listado = lista; 
}

@XmlElement (name = "evento") // tag per separar els sales del grup
public void setGrupeventos ( ArrayList<eventos> lista ){ 
listado = lista; 
}

public ArrayList<eventos> getGrupeventos (){ 
return listado; 
}

public eventos geteventos ( int pos ){ 
return listado.get(pos); 
}

public void seteventos ( eventos eve ){ 
listado.add (eve); 
}

public int numeventos (){ 
return listado.size(); 
}
    
}