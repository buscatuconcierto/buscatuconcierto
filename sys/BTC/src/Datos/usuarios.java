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

@XmlType(propOrder={"nif", "id", "nombre", "apellido1", "apellido2", "email", "fecha_nacimiento", "contrasenya", "tarjeta", "rol", "puntos"})
public class usuarios {
    
    protected String nif, nombre, apellido1, apellido2, email, fecha_nacimiento, usuario, contrasenya, tarjeta;
    protected int id, rol, puntos;

    @XmlElement(name="nif")
    public String getNif() {
        return nif;
    }

    public void setNif(String nif) {
        this.nif = nif;
    }

    @XmlElement(name="nombre")
    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    @XmlElement(name="apellido1")
    public String getApellido1() {
        return apellido1;
    }

    public void setApellido1(String apellido1) {
        this.apellido1 = apellido1;
    }

    @XmlElement(name="apellido2")
    public String getApellido2() {
        return apellido2;
    }

    public void setApellido2(String apellido2) {
        this.apellido2 = apellido2;
    }

    @XmlElement(name="email")
    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    @XmlElement(name="fecha_nacimiento")
    public String getFecha_nacimiento() {
        return fecha_nacimiento;
    }

    public void setFecha_nacimiento(String fecha_nacimiento) {
        this.fecha_nacimiento = fecha_nacimiento;
    }

    @XmlElement(name="usuario")
    public String getUsuario() {
        return usuario;
    }

    public void setUsuario(String usuario) {
        this.usuario = usuario;
    }

    @XmlElement(name="contrasenya")
    public String getContrasenya() {
        return contrasenya;
    }

    public void setContrasenya(String contrasenya) {
        this.contrasenya = contrasenya;
    }

    @XmlElement(name="tarjeta")
    public String getTarjeta() {
        return tarjeta;
    }

    public void setTarjeta(String tarjeta) {
        this.tarjeta = tarjeta;
    }

    @XmlElement(name="id")
    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    @XmlElement(name="rol")
    public int getRol() {
        return rol;
    }

    public void setRol(int rol) {
        this.rol = rol;
    }

    @XmlElement(name="puntos")
    public int getPuntos() {
        return puntos;
    }

    public void setPuntos(int puntos) {
        this.puntos = puntos;
    }

    public usuarios(String nif, int id, String nombre, String apellido1, String apellido2, String email, String fecha_nacimiento, String usuario, String contrasenya, String tarjeta, int rol, int puntos) {
        this.nif = nif;
        this.nombre = nombre;
        this.apellido1 = apellido1;
        this.apellido2 = apellido2;
        this.email = email;
        this.fecha_nacimiento = fecha_nacimiento;
        this.usuario = usuario;
        this.contrasenya = contrasenya;
        this.tarjeta = tarjeta;
        this.id = id;
        this.rol = rol;
        this.puntos = puntos;
    }
    
    
    
}
