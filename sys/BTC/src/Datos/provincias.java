/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Datos;

import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlType;

/**
 *
 * @author devweb
 */

@XmlType(propOrder={"id_prov", "id_com", "provincia"})
public class provincias {
    
    protected int id_prov, id_com;
    protected String provincia;

    @XmlElement(name="id_prov")
    public int getId_prov() {
        return id_prov;
    }

    public void setId_prov(int id_prov) {
        this.id_prov = id_prov;
    }

    @XmlElement(name="id_com")
    public int getId_com() {
        return id_com;
    }

    public void setId_com(int id_com) {
        this.id_com = id_com;
    }

    @XmlElement(name="provincia")
    public String getProvincia() {
        return provincia;
    }

    public void setProvincia(String provincia) {
        this.provincia = provincia;
    }

    public provincias(int id_prov, int id_com, String provincia) {
        this.id_prov = id_prov;
        this.id_com = id_com;
        this.provincia = provincia;
    }
    
    
    
}
