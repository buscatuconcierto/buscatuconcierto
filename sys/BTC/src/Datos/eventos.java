/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Datos;

import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlRootElement;
import javax.xml.bind.annotation.XmlType;

/**
 *
 * @author devweb
 */

@XmlType(propOrder={"referencia", "nombre", "fecha", "hora", "localizacion", "descripcion", "puntos"})
public class eventos {
    
    protected int referencia, puntos;
    protected String nombre, fecha, hora, localizacion, descripcion;

    @XmlElement(name="referencia")
    public int getReferencia() {
        return referencia;
    }

    public void setReferencia(int referencia) {
        this.referencia = referencia;
    }

    @XmlElement(name="puntos")
    public int getPuntos() {
        return puntos;
    }

    public void setPuntos(int puntos) {
        this.puntos = puntos;
    }

    @XmlElement(name="nombre")
    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    @XmlElement(name="fecha")
    public String getFecha() {
        return fecha;
    }

    public void setFecha(String fecha) {
        this.fecha = fecha;
    }

    @XmlElement(name="hora")
    public String getHora() {
        return hora;
    }

    public void setHora(String hora) {
        this.hora = hora;
    }

    @XmlElement(name="descripcion")
    public String getLocalizacion() {
        return localizacion;
    }

    public void setLocalizacion(String localizacion) {
        this.localizacion = localizacion;
    }

    @XmlElement(name="localizacion")
    public String getDescripcion() {
        return descripcion;
    }

    public void setDescripcion(String descripcion) {
        this.descripcion = descripcion;
    }

    public eventos(int referencia, String nombre, String fecha, String hora, String localizacion, String descripcion, int puntos) {
        this.referencia = referencia;
        this.puntos = puntos;
        this.nombre = nombre;
        this.fecha = fecha;
        this.hora = hora;
        this.localizacion = localizacion;
        this.descripcion = descripcion;
    }
    
    
    

    
}
