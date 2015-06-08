/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Datos;
import javax.xml.bind.annotation.XmlElement; // imports especifics de JAXB
import javax.xml.bind.annotation.XmlType;

/**
 *
 * @author devweb
 */

@XmlType(propOrder={"id_com", "comunidades"})
public class comunidades {

    protected int id_com;
    protected String comunidades;

    @XmlElement(name="id_com")
    public int getId_com() {
        return id_com;
    }

    public void setId_com(int id_com) {
        this.id_com = id_com;
    }

    @XmlElement(name="comunidades")
    public String getComunidades() {
        return comunidades;
    }

    public void setComunidades(String comunidades) {
        this.comunidades = comunidades;
    }

    public comunidades(int id_com, String comunidades) {
        this.id_com = id_com;
        this.comunidades = comunidades;
    }
    
    


    
    
}
